<?php

use Illuminate\Database\Seeder;
use App\Blank;
use Carbon\Carbon;
class blank_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blank = new Blank();
        $blank->data ='<p>Hello World</p>';
        $blank->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $blank->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $blank->save();
    }
}
