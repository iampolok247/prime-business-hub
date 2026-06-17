<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = [
            'manage pages',
            'manage services',
            'manage testimonials',
            'manage case studies',
            'manage blogs',
            'manage faqs',
            'manage applications',
            'manage consultations',
            'manage menus',
            'manage settings',
            'manage seo',
            'manage users',
        ];

        foreach ($permissions as $permission) {
            Permission::findOrCreate($permission, 'web');
        }

        $superAdmin = Role::findOrCreate('Super Admin', 'web');
        $admin = Role::findOrCreate('Admin', 'web');
        $contentManager = Role::findOrCreate('Content Manager', 'web');
        $marketingManager = Role::findOrCreate('Marketing Manager', 'web');

        $superAdmin->syncPermissions(Permission::all());
        $admin->syncPermissions(Permission::all());
        $contentManager->syncPermissions([
            'manage pages',
            'manage services',
            'manage testimonials',
            'manage case studies',
            'manage blogs',
            'manage faqs',
        ]);
        $marketingManager->syncPermissions([
            'manage blogs',
            'manage menus',
            'manage settings',
            'manage seo',
            'manage applications',
            'manage consultations',
        ]);
    }
}
