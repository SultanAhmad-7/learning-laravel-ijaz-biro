<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminUserTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $adminUserDummy = [
           ['nickname' => 'admin','name' => 'Admin','created_at' => now(),'updated_at' => now()],
           ['nickname' => 'user','name' => 'User','created_at' => now(),'updated_at' => now()],
           
       ];
       DB::table('roles')->insert($adminUserDummy);
    }
}
