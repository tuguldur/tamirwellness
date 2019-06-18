<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $inbox = new Role();
        $inbox->name = 'inbox';
        $inbox->description = 'Read & Archive inbox';
        $inbox->save();


        $home = new Role();
        $home->name = 'home';
        $home->description = 'Add & Remove Home items';
        $home->save();

        $comment = new Role();
        $comment->name = 'comment';
        $comment->description = 'Add & Remove Comment items';
        $comment->save();
 
        $contact = new Role();
        $contact->name = 'contact';
        $contact->description = 'Edit contact items';
        $contact->save();

        $service = new Role();
        $service->name = 'service';
        $service->description = 'Edit & remove Services';
        $service->save();

        $admin = new Role();
        $admin->name = 'admin';
        $admin->description = 'Can do anything';
        $admin->save();
    }
}
