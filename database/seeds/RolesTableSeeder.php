<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * @var \Illuminate\Support\Collection
     */
    protected $roles;

    /**
     * UsersTableSeeder constructor.
     */
    public function __construct()
    {
        $this->roles = collect();
    }

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'name' => 'Ադմին',
                'slug' => Role::ROLE_ADMIN,
            ]
        ];

        foreach ($items as $item) {
            $this->roles->push(
                factory(\App\Models\Role::class)->create($item)
            );
        }

        $this->report();
    }

    /**
     * @return void
     */
    protected function report()
    {
        if ($this->roles->isEmpty()) {
            return;
        }

        $this->command->info('The next roles were added:');
        foreach ($this->roles as $role) {
            $this->command->info(" - Name: {$role->name}");
        }
    }
}
