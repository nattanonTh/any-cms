<?php

namespace App\Console\Commands;

use App\Repos\UserRepo;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateAdminUserCommand extends Command
{
    protected $userRepo;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:admin-user {email=admin@any-cms.com} {password=adminpassword}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to create admin user';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(UserRepo $userRepo)
    {
        parent::__construct();
        $this->userRepo = $userRepo;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $adminUsre = $this->userRepo->create([
            'email' => $this->argument('email'),
            'name' => 'admin',
            'password' => Hash::make($this->argument('password')),
        ]);

        $adminUsre->syncRoles(['admin']);
    }
}
