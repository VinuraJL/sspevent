<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = array(
            array(
                "name" => "Book Reading Event",
                "description" => "This is a gathering of booker lovers from all over the worlld",
                "address" => "Lungomare Marconi 41",
                "city" => "Trieste",
                "country" => "Italy",
                "zip_code" => "34127",
                "latitude" => "45.651615",
                "longitude" => "13.769289",
                "phone" => "+39 040 773501",
                "email" => "info@hotelexcelsior.biz",
                "website" => "https://www.hotelexcelsior.biz/",
                "check_in" => "3:00 PM",
                "check_out" => "12:00 AM",
                "price" => "$300",
            ),
            array(
                "name" => "Football trivia event",
                "description" => "A wondeful event for lover of the beautiful game to gather and answer questions and win amazing prizes.",
                "address" => "50 Central Park S",
                "city" => "New York",
                "country" => "USA",
                "zip_code" => "10019",
                "latitude" => "40.765731",
                "longitude" => "-73.976497",
                "phone" => "+1 212-308-9100",
                "email" => "info@ritzcarlton.com",
                "website" => "https://www.ritzcarlton.com/",
                "check_in" => "3:00 PM",
                "check_out" => "7:00 PM",
                "price" => "$200",
            ),
            array(
                "name" => "Starry Serenade Music Festival",
                "description" => "The Starry Serenade Music Festival is an annual event that takes place under the open night sky in a picturesque meadow. Musicians and bands from all over the region gather to perform a mesmerizing array of genres",
                "address" => "Pobřežní 1",
                "city" => "Prague",
                "country" => "Czech Republic",
                "zip_code" => "186 00",
                "latitude" => "50.099018",
                "longitude" => "14.438733",
                "phone" => "+420 2 2182 1018",
                "email" => "info@hiltonprague.com",
                "website" => "https://www.hilton.com/en/hotels/prghitw-hilton-prague/",
                "check_in" => "2:00 PM",
                "check_out" => "4:00 AM",
                "price" => "$300",
            ),
            array(
                "name" => "Infinite Horizons Technology Expo:",
                "description" => "The Infinite Horizons Technology Expo is a cutting-edge event that showcases the latest advancements in science and technology. ",
                "address" => "48 Oriental Avenue, Bang Rak",
                "city" => "Bangkok",
                "country" => "Thailand",
                "zip_code" => "10500",
                "latitude" => "13.725431",
                "longitude" => "100.526758",
                "phone" => "+66 2 659 9000",
                "email" => "mokul-reservations@mohg.com",
                "website" => "https://www.mandarinoriental.com/bangkok/chao-phraya-river/luxury-hotel",
                "check_in" => "10:00 AM",
                "check_out" => "12:00 AM",
                "price" => "$400",
            ),
            array(
                "name" => "Underwater World Exhibition",
                "description" => "The Underwater World Exhibition is a captivating event held in a state-of-the-art aquarium. The exhibition showcases mesmerizing displays of marine life from various oceans and ecosystems.",
                "address" => "Jumeirah St - Umm Suqeim 3",
                "city" => "Dubai",
                "country" => "United Arab Emirates",
                "zip_code" => "75157",
                "latitude" => "25.141149",
                "longitude" => "55.185387",
                "phone" => "+971 4 301 7777",
                "email" => "baajreservations@jumeirah.com",
                "website" => "https://www.jumeirah.com/en/stay/dubai/burj-al-arab-jumeirah",
                "check_in" => "8:00 AM",
                "check_out" => "11:00 PM",
                "price" => "$900",
            ),
            array(
                "name" => "Culinary World Tour Expo",
                "description" => "The Culinary World Tour Expo is a culinary extravaganza held in a sprawling exhibition hall. The event brings together renowned chefs and food enthusiasts from around the globe.",
                "address" => "19 Avenue Kléber",
                "city" => "Paris",
                "country" => "France",
                "zip_code" => "75116",
                "latitude" => "48.870243",
                "longitude" => "2.293953",
                "phone" => "+33 1 58 12 28 88",
                "email" => "ppr@peninsula.com",
                "website" => "https://www.peninsula.com/en/paris/5-star-luxury-hotel-16th-arrondissement",
                "check_in" => "1:00 PM",
                "check_out" => "10:00 PM",
                "price" => "$1,000",
            ),
        );

        foreach ($events as $event) {

            // generate a random number between 1 and 10 and add as the categort_id to the event array
            $event['category_id'] = rand(1, 10);

            \App\Models\event::create($event);
        }
    }
}
