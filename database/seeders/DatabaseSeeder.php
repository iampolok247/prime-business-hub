<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RolesAndPermissionsSeeder::class,
            CmsDemoSeeder::class,
        ]);

        $admin = User::query()->firstOrCreate([
            'email' => 'admin@childmindingbusinesslaunch.co.uk',
        ], [
            'name' => 'Super Admin',
            'password' => 'password',
        ]);

        $admin->assignRole('Super Admin');
    }
}
