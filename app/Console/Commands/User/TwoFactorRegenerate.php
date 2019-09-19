<?php

namespace App\Console\Commands\User;

use App\User;
use Illuminate\Console\Command;

class TwoFactorRegenerate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cf:user:2fa {--force : run without asking for confirmation}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create user for knowledgebase';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $users = [];
        foreach (User::all() as $user) {
            $users[$user->id] = $user->name;
        }

        $username = $this->choice('Which user?', $users);
        $user = User::where('name', $username)->first();
        if (!$user) {
            // show an error and exist if the user does not exist
            $this->error("User with username '$username' not found.");
            return;
        }

        // Print a warning
        $this->info('A new secret will be generated for ' . $user->name);
        $this->info('This action will invalidate the previous secret key.');

        // ask for confirmation if not forced
        if (!$this->option('force') && !$this->confirm('Do you wish to continue?')) return;

        // initialise the 2FA class
        $google2fa = app('pragmarx.google2fa');

        // generate a new secret key for the user
        $user->twofactor_secret = $google2fa->generateSecretKey();

        // save the user
        $user->save();

        // show the new secret key
        $this->info('A new secret has been generated for ' . $user->name);
        $this->info('The new secret is: ' . $user->twofactor_secret);
    }
}
