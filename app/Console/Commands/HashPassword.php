<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class HashPassword extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:hash-password';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        {
            $users = User::all();
    
            foreach ($users as $user) {
                $user->password = bcrypt($user->password);
                $user->save();
            }
    
            $this->info('Passwords have been hashed successfully!');
        }
    }
}
