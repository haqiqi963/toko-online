<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'petugas']);
        Role::create(['name' => 'user']);

        Permission::create(['name' => 'tambah-user']);
        Permission::create(['name' => 'ubah-user']);
        Permission::create(['name' => 'hapus-user']);
        Permission::create(['name' => 'lihat-user']);

        $admin = Role::findByName('admin');
        $admin->givePermissionTo('tambah-user');
        $admin->givePermissionTo('ubah-user');
        $admin->givePermissionTo('hapus-user');
        $admin->givePermissionTo('lihat-user');
    }
}
