<?php
namespace Database\Seeders;

use App\Helpers\Helper;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Permission::truncate();

        $Permissions = [
            'Admin Panel',
            'Role List',
            'Role Create',
            'Role Edit',
            'Role Delete',
            'User Panel',
            'User List',
            'User Create',
            'User Edit',
            'User Delete',
        ];


        foreach ($Permissions as $Permission) {

             Permission::Create(['name' => $Permission, 'slug' => Helper::slugify($Permission)]);
//            DB::collection('permission')->create(['name' => $Permission, 'slug' => Helper::slugify($Permission)]);

        }

        Schema::enableForeignKeyConstraints();
    }
}
