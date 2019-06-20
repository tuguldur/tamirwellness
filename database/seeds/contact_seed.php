<?php

use Illuminate\Database\Seeder;
// use Carbon\Carbon;`
use App\Contact;
class contact_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = new Contact;
        $contact->phone_number = '+976 9911 2044';
        $contact->location = 'Tamir Camp Road, Terelj, Nalaikha, 12770, Mongolia';
        $contact->location_mn =  'Tamir Camp Road, Terelj, Nalaikha, 12770, Mongolia';
        $contact->email = 'info@tamirwellness.com';
        $contact->save();
     }
}
