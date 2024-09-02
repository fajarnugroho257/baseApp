<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Menu;
use App\Models\Role_menu;
use App\Models\Heading;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        // role
        Role::create([
            'role_id' => 'R0001',
            'role_name' => 'developer',
        ]);
        Role::create([
            'role_id' => 'R0002',
            'role_name' => 'admin',
        ]);
        Role::create([
            'role_id' => 'R0003',
            'role_name' => 'pengguna',
        ]);
        // user
        User::create([
            'user_id' => 'U0001',
            'role_id' => 'R0001',
            'username' => 'dev',
            'password' => bcrypt('dev123'),
        ]);
        // heading
        Heading::create([
            'app_heading_id' => 'H0001',
            'app_heading_name' => 'Heading Aplikasi',
        ]);
        // menu
        Menu::create([
            'menu_id' => 'M0001',
            'app_heading_id' => 'H0001',
            'menu_name' => 'Daftar Menu Aplikasi',
            'menu_url' => 'menuController',
            'menu_parent' => '0',
        ]);
        // role menu
        Role_menu::create([
            'role_menu_id' => 'E0001',
            'menu_id' => 'M0001',
            'role_id' => 'R0001',
        ]);

    }
}
