<?php

use App\Notetyper;
use Illuminate\Database\Seeder;

class NotetyperTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $notetyper = new Notetyper();
        $notetyper->id = 1;
        $notetyper->name = 'cong viec 1';
        $notetyper->description = 'noi dung cong viec 1';
        $notetyper->save();

        $notetyper = new Notetyper();
        $notetyper->id = 2;
        $notetyper->name = 'cong viec 2';
        $notetyper->description = 'noi dung cong viec 2';
        $notetyper->save();

        $notetyper = new Notetyper();
        $notetyper->id = 3;
        $notetyper->name = 'cong viec 3';
        $notetyper->description = 'noi dung cong viec 3';
        $notetyper->save();
    }
}
