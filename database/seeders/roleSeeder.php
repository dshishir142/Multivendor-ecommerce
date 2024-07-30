<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $role = new Role();
        $roles = [
            'user',
            'seller',
            'admin'
        ];
        foreach ($roles as $role) {
            Role::create([
                'role_name' => $role,
            ]);
        }
    }
}
