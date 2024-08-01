<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Roleseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
    $role1=  Role::create(['name' => 'admin']);
      
     $role2=  Role::create(['name' => 'Vendedor']);


     Permission::create(['name'=>'vendedor.recarcarTarjetas']);
     Permission::create(['name'=>'admin.Actualizarusuario'])->syncRoles([$role1]);


     
   
    }
}
