<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permissions')->Delete();

        $data = array(
            0 =>
            array(
                'name' => 'View roles',
                'guard_name' => 'web',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            1 =>
            array(
                'name' => 'Add role',
                'guard_name' => 'web',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            2 =>
            array(
                'name' => 'Edit role',
                'guard_name' => 'web',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            3 =>
            array(
                'name' => 'Delete role',
                'guard_name' => 'web',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            4 =>
            array(
                'name' => 'View permissions',
                'guard_name' => 'web',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            5 =>
            array(
                'name' => 'Add permission',
                'guard_name' => 'web',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            6 =>
            array(
                'name' => 'Edit permission',
                'guard_name' => 'web',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            7 =>
            array(
                'name' => 'Delete permission',
                'guard_name' => 'web',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            8 =>
            array(
                'name' => 'View users',
                'guard_name' => 'web',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            9 =>
            array(
                'name' => 'Add user',
                'guard_name' => 'web',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            10 =>
            array(
                'name' => 'Edit user',
                'guard_name' => 'web',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            11 =>
            array(
                'name' => 'Delete user',
                'guard_name' => 'web',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
        );

        foreach ($data as $item) {

            Permission::create($item);
        }
    }
}