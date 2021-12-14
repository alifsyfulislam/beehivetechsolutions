<?php
namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
       // User::truncate();
        $userPermission = Permission::all();
        $userRole = Role::where('slug', 'super-admin')->first();

        DB::table('roles_permissions')->truncate();
        DB::table('users_permissions')->truncate();

        $userRole->permissions()->attach($userPermission);

        $user = User::where('email', 'alif@genusys.us')->first();

        if(!$user){

            $userId = time().rand(1000,9000);

            $user = User::create([
                'id' => $userId,
                'username' => 'admin',
                'first_name' => 'Syful Islam',
                'last_name' => 'Alif',
                'mobile' => '01680051462',
                'slug' => 'syful-islam',
                'email' => 'alif@genusys.us',
                'password' => bcrypt('123456'),
                'status' => 1,
                'email_verified_at' => now(),
                'remember_token' => Str::random(10)
            ]);

            $user = User::where('email', 'alif@genusys.us')->first();

            $user->roles()->attach($userRole);
            $user->media()->create([
                'url' => url('/').'/beehivetechsolutions/public/avatar/placeholder.png'
            ]);
        }

        // $user->permissions()->attach($userPermission);

        Schema::enableForeignKeyConstraints();

    }
}
