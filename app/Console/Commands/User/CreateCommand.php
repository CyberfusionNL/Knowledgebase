<?php

namespace App\Console\Commands\User;

use App\Models\Author;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cf:user:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create knowledgebase user';

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
     * @return void
     */
    public function handle()
    {
        DB::beginTransaction();
        $user = new User;
        $user->name = $this->ask('Username');
        $user->twofactor_secret = '';
        $user->email = $this->ask('E-Mail Address');
        $password = $this->secret('Password');
        if (strlen($password) > 8) {
            $user->password = Hash::make($password);
            unset($password);
        } else {
            $this->error('Password too short, aborting...');

            return;
        }
        if ($this->confirm('Are you sure to create this user?')) {
            $user->save();
            $this->alert("User '$user->name' created!");
            $author = new Author;
            $author->user_id = $user->id;
            $author->name = $this->ask('First name');
            $author->surname = $this->ask('Surname');
            $author->organisation = $this->ask('For what firm does he work?');
            $author->save();
            $this->alert('Author settings have been initialized');
            DB::commit();
        } else {
            $this->alert('User has not been created.');
        }
    }
}
