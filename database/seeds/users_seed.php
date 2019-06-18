<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\User;
use App\Role;
class users_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $role_admin = Role::where('name','admin')->first();
            $admin = new User();
            $admin->name = Str::random(10);
            $admin->email = 'admin@brainstall.com';
            $admin->password = bcrypt('Password');
            $admin->created_at = Carbon::now()->format('Y-m-d H:i:s');
            $admin->updated_at = Carbon::now()->format('Y-m-d H:i:s');
            $admin->save();
            $admin->roles()->attach($role_admin);
    }
}
