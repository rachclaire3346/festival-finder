<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
	     'name' => "Tomorrowland",
	     'description' => "Tomorrowland (festival) Tomorrowland is an electronic dance music festival held in Boom, Belgium. Tomorrowland was first held in 2005, and has since become one of the world's largest and most notable music festivals. It now stretches over 2 weekends and usually sells out in minutes.",
	     'address' => "Boom, Belgium",
	     'zipcode' => 2850,
	     'question_two' => 9,
	     'question_three' => 13,
	     'question_four' => 18,
	     'question_five' => 22,
	     'question_six' => "$300+",
	     'question_seven' => "20 July, 2018",
	     'question_eight' => "22 July, 2018",
	     'administrator' => 1,
	     'created_at' => Carbon::now(),
	     'updated_at' => Carbon::now()
	     ]);

		DB::table('events')->insert([
	     'name' => "Zedd",
	     'description' => "EXPRESS LIVE!",
	     'address' => "Colombus, Ohio",
	     'zipcode' => 43004,
	     'question_two' => 7,
	     'question_three' => 11,
	     'question_four' => 14,
	     'question_five' => 23,
	     'question_six' => "$50 or less",
	     'question_seven' => "13 December, 2017",
	     'question_eight' => "13 December, 2017",
	     'administrator' => 1,
	     'created_at' => Carbon::now(),
	     'updated_at' => Carbon::now()
	     ]);

	     DB::table('events')->insert([
	     'name' => "Seven Lions + Tritonal",
	     'description' => "Seven Lions: Dubstep / trance mash-up EDM artist. Tritonal: Producer duo from Austin, Texas, USA",
	     'address' => "Echo Stage Washington, D.C.",
	     'zipcode' => 20018,
	     'question_two' => 7,
	     'question_three' => 12,
	     'question_four' => 14,
	     'question_five' => 23,
	     'question_six' => "$50 - $100",
	     'question_seven' => "9 December, 2017",
	     'question_eight' => "9 December, 2017",
	     'administrator' => 1,
	     'created_at' => Carbon::now(),
	     'updated_at' => Carbon::now()
	     ]);

	     DB::table('events')->insert([
	     'name' => "SnowGlobe",
	     'description' => "SnowGlobe Music Festival Returns. The SnowGlobe Music Festival will take place in South Lake Tahoe on Dec. 29-31, 2017 at the Lake Tahoe Community College Field at 1 College Way. ... With multiple stages of world-class musicians, the live music at SnowGlobe is sure to satisfy thousands of music fans.",
	     'address' => "South Lake Tahoe, California",
	     'zipcode' => 96150,
	     'question_two' => 9,
	     'question_three' => 13,
	     'question_four' => 15,
	     'question_five' => 22,
	     'question_six' => "$100 - $300",
	     'question_seven' => "29 December, 2017",
	     'question_eight' => "31 December, 2017",
	     'administrator' => 1,
	     'created_at' => Carbon::now(),
	     'updated_at' => Carbon::now()
	     ]);

	     DB::table('events')->insert([
	     'name' => "Duke Dumont",
	     'description' => "Adam George Dyment, a.k.a. Duke Dumont is a British DJ and music producer, known worldwide for his single “Need U (100%)” which topped the UK Singles Chart in April of 2013.",
	     'address' => "Brooklyn, Ny",
	     'zipcode' => 23432,
	     'question_two' => 7,
	     'question_three' => 12,
	     'question_four' => 17,
	     'question_five' => 23,
	     'question_six' => "$50 or less",
	     'question_seven' => "8 December, 2017",
	     'question_eight' => "8 December, 2017",
	     'administrator' => 1,
	     'created_at' => Carbon::now(),
	     'updated_at' => Carbon::now()
	     ]);

	     DB::table('events')->insert([
	     'name' => "Ultra Miami",
	     'description' => "The world's premier electronic music festival, boasting elite DJs and unparalleled production located in the beautiful city of Miami.",
	     'address' => "Miami, Florida",
	     'zipcode' => 33132,
	     'question_two' => 9,
	     'question_three' => 13,
	     'question_four' => 16,
	     'question_five' => 22,
	     'question_six' => "$300+",
	     'question_seven' => "23 March, 2018",
	     'question_eight' => "25 March, 2018",
	     'administrator' => 1,
	     'created_at' => Carbon::now(),
	     'updated_at' => Carbon::now()
	     ]);         
    }
}


