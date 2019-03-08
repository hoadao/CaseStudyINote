<?php

use Illuminate\Database\Seeder;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $note = new \App\Notes();
        $note->title = "Làm case study";
        $note->content = "Hoàn thành bài case study Inote cuối khóa học";
        $note->save();
    }
}
