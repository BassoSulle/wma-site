<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // delete all previous data
        DB::table('users')->delete();

        // get admin role
        $role = Role::where('name', 'Admin')->first();

        // create admin user
        $admin = User::create([
            'name' => 'Ally Juma',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Admin'),
            'remember_token' => Str::random(60),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // assign admin role to admin user
        $admin->assignRole($role);
    }
}