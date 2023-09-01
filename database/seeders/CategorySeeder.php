<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $event_categories = array(
            array(
                'name' => 'Music Festivals',
                'description' => 'Vibrant gatherings of musicians and music lovers celebrating diverse genres under the open sky.'
            ),
            array(
                'name' => 'Culinary Experiences',
                 'description' => 'Events that tantalize taste buds with a variety of dishes, cooking demonstrations, and gourmet delights.'
            ),
            array(
                'name' => 'Art Exhibitions',
                'description' => 'Showcasing masterpieces from local and international artists, fostering creativity and cultural appreciation.'
            ),
            array(
                "name" => "Beach Resorts",
                "description" => "Relax in paradise at these stunning resorts located on the world's most beautiful beaches."
            ),
            array(
                'name' => 'Tech Conferences',
                'description' => 'Gatherings of tech enthusiasts, innovators, and experts sharing cutting-edge advancements and insights.'
            ),
            array(
                'name' => 'Outdoor Adventures',
        'description' => 'Explorations of nature through hiking, camping, and adrenaline-pumping activities for adventure seekers.'
    ),
            array(
                'name' => 'Sports Events',
        'description' => 'Join fellow sports fans to enjoy sport from accross the globe.'
    ),
            array(
                "name" => "Book Events",
                "description" => "Step back in time and experience the grandeur and elegance of a literature masterpieces"
            ),

        );

        foreach ($event_categories as $event_category) {
            \App\Models\Category::create($event_category);
        }
    }
}
