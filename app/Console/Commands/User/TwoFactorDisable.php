<?php

namespace App\Console\Commands\User;

use App\User;
use Illuminate\Console\Command;

class TwoFactorDisable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cf:user:unlock {--force : run without asking for confirmation}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Disable Twofactor code for user';

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
        $this->info('Twofactor will be disabled for ' . $user->name);

        // ask for confirmation if not forced
        if (!$this->option('force') && !$this->confirm('Do you wish to continue?')) return;

        // generate a new secret key for the user
        $user->twofactor_secret = '';

        // save the user
        $user->save();

        // show the new secret key
        $this->alert('Twofactor has been disabled for ' . $user->name);
    }
}
