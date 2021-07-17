<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $role = Role::create(['name'=>'admin']);
       $role2 = Role::create(['name'=>'other']);

       Permission::create(['name'=>'admin.home'])->syncRoles($role);
       Permission::create(['name'=>'admin.categories.index'])->syncRoles($role);
       Permission::create(['name'=>'admin.categories.create'])->syncRoles($role);
       Permission::create(['name'=>'admin.categories.edit'])->syncRoles($role);
       Permission::create(['name'=>'admin.categories.destroy'])->syncRoles($role);

       Permission::create(['name'=>'admin.services.index'])->syncRoles($role);
       Permission::create(['name'=>'admin.services.create'])->syncRoles($role);
       Permission::create(['name'=>'admin.services.edit'])->syncRoles($role);
       Permission::create(['name'=>'admin.services.destroy'])->syncRoles($role);

    
       
       
    }
}
