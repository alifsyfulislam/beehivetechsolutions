<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AllSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PermissionTableSeeder::class,
            RoleTableSeeder::class,
            BulkUserTableSeeder::class,
            UserTableSeeder::class,
        ]);
    }
}
