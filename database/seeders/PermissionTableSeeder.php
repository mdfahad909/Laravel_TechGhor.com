<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permissions
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'blog-list',
            'blog-create',
            'blog-edit',
            'blog-delete',
            'slider-list',
            'slider-create',
            'slider-edit',
            'slider-delete',
            'about-list',
            'about-create',
            'about-edit',
            'about-delete',
            'services-list',
            'services-create',
            'services-edit',
            'services-delete',
            'category-list',
            'category-create',
            'category-edit',
            'category-delete',
            'post-list',
            'post-create',
            'post-edit',
            'post-delete',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
