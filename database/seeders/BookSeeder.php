<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'publisher_id' => 1,
            'title' => 'It Ends With Us',
            'author' => 'Colleen Hoover',
            'year' => 2013,
            'synopsis' => "Lily hasn’t always had it easy, but that’s never stopped her from working hard for the life she wants.",
            'image' => 'storage/images/It Ends With Us.jpg',
        ]);
        DB::table('books')->insert([
            'publisher_id' => 1,
            'title' => 'Losing Hopes',
            'author' => 'Colleen Hoover',
            'year' => 2014,
            'synopsis' => "In Hopeless, Sky left no secret unearthed, no feeling unshared, and no memory forgotten, but Holder’s past remained a mystery.
            ",
            'image' => 'storage/images/Losing Hope.jpg',
        ]);
        DB::table('books')->insert([
            'publisher_id' => 1,
            'title' => 'Reminders Of Him',
            'author' => 'Colleen Hoover',
            'year' => 2015,
            'synopsis' => "After serving five years in prison for a tragic mistake.",
            'image' => 'storage/images/Reminders Of Him.jpg',
        ]);
        DB::table('books')->insert([
            'publisher_id' => 1,
            'title' => 'Verity',
            'author' => 'Colleen Hoover',
            'year' => 2020,
            'synopsis' => "Lowen Ashleigh is a struggling writer on the brink of financial ruin when she accepts the job offer of a lifetime. ",
            'image' => 'storage/images/Verity.jpg',
        ]);
        DB::table('books')->insert([
            'publisher_id' => 2,
            'title' => 'Barbie Bus Stop',
            'author' => 'Barbie Animation Universe',
            'year' => 2007,
            'synopsis' => "Lowen arrives at the Crawford home, ready to sort through years of Verity's notes and outlines.",
            'image' => 'storage/images/Barbie Bus Stop.jpg',
        ]);
        DB::table('books')->insert([
            'publisher_id' => 2,
            'title' => 'Barbie Mermaid Tale',
            'author' => 'Barbie Animation Universe',
            'year' => 2018,
            'synopsis' => "Page after page of bone-chilling admissions, including Verity's recollection of what really happened the day her daughter died.",
            'image' => 'storage/images/Barbie Mermaid Tale.jpg',
        ]);
        DB::table('books')->insert([
            'publisher_id' => 2,
            'title' => 'Barbie Top Secret',
            'author' => 'Barbie Animation Universe',
            'year' => 2019,
            'synopsis' => "Lowen decides to keep the manuscript hidden from Jeremy, knowing its contents would devastate the already grieving father.",
            'image' => 'storage/images/Barbie Top Secret.jpg',
        ]);
        DB::table('books')->insert([
            'publisher_id' => 2,
            'title' => 'Barbie Fairy',
            'author' => 'Barbie Animation Universe',
            'year' => 2022,
            'synopsis' => "But as Lowen's feelings for Jeremy begin to intensify, she recognizes all the ways she could benefit if he were to read his wife's words. ",
            'image' => 'storage/images/Barbie Fairy.jpg',
        ]);
        DB::table('books')->insert([
            'publisher_id' => 3,
            'title' => 'Milk and Honey',
            'author' => 'Rupi Kaur',
            'year' => 2017,
            'synopsis' => "Milk and honey' is a collection of poetry and prose about survival. About the experience of violence, abuse, love, loss",
            'image' => 'storage/images/Milk and Honey.jpg',
        ]);
        DB::table('books')->insert([
            'publisher_id' => 3,
            'title' => 'The Sun and Her Flower',
            'author' => 'Rupi Kaur',
            'year' => 2018,
            'synopsis' => "Deals with a different pain. Heals a different heartache.",
            'image' => 'storage/images/The Sun and The Flower.jpg',
        ]);
        DB::table('books')->insert([
            'publisher_id' => 3,
            'title' => 'Home Body',
            'author' => 'Rupi Kaur',
            'year' => 2019,
            'synopsis' => "Takes readers through a journey of the most bitter moments in life and finds sweetness in them because there is sweetness everywhere if you are just willing to look.",
            'image' => 'storage/images/Home Budy.jpeg',
        ]);
        DB::table('books')->insert([
            'publisher_id' => 3,
            'title' => 'The Sun and The Flower',
            'author' => 'Rupi Kaur',
            'year' => 2020,
            'synopsis' => "A vibrant and transcendent journey about growth and healing.",
            'image' => 'storage/images/The Sund and Her Flower.jpeg',
        ]);
    }
}

