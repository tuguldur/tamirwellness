<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class contact_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact')->insert([
            'phone_number' => '+976 9911 2044',
            'location' => 'Tamir Camp Road, Terelj, Nalaikha, 12770, Mongolia',
            'email' => 'info@tamirwellness.com',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
