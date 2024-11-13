<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder; 
use Illuminate\Support\Facades\DB; 
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void 
    {
        DB::table('roles')->insert([
            [
                'name' => 'Mahasiswa',
                'guard_name' => 'web'
            ]
        ]);
    }
}