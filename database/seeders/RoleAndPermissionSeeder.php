<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission; 

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'editor']);

        Permission::create(['name' => 'create post']);
        Permission::create(['name' => 'edit post']);

        $adminRole = Role::findByName('admin');
        $adminRole->givePermissionTo(['create post', 'edit post']);

        $editorRole = Role::findByName('editor');
        $editorRole->givePermissionTo('edit post');
    }
}
