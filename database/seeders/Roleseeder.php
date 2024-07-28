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
        
     $role1 =   Role::create(['bame' => 'Admin']);
     $role2=  Role::create(['bame' => 'Vendedor']);


     Permission::create(['name'=>'recargar.recarcarTarjetas']);
     Permission::create(['compras.buscar.BuscarUsuario']);
     Permission::create(['compras.edit.ActualizarUsuario']);
    }
}
