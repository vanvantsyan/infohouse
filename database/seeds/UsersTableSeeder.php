<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * @var \Illuminate\Support\Collection
     */
    protected $users;

    /**
     * UsersTableSeeder constructor.
     */
    public function __construct()
    {
        $this->users = collect();
    }

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $items = [[
            'role_id' => Role::bySlug(Role::ROLE_ADMIN),
            'full_name' => 'Admin Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]];

        foreach ($items as $item) {
            $this->users->push(
                factory(\App\Models\User::class)->create($item)
            ) ;
        }

        $this->report();
    }

    /**
     * @return void
     */
    protected function report()
    {
        if ($this->users->isEmpty()) {
            return;
        }

        $this->command->info('The next users were added:');
        foreach ($this->users as $user) {
            $this->command->info(" - Full Name: {$user->full_name}, Email: {$user->email}");
        }
    }
}
