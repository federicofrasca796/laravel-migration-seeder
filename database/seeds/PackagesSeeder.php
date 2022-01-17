<?php

use Faker\Generator as Faker;
use App\Models\Package;
use Illuminate\Database\Seeder;

class PackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $trips = [
            [
                'img' => 'https://picsum.photos/id/1035/400/300',
                'title' => 'Andalusia',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, vitae delectus, natus quaerat dignissimos, sapiente quis consequuntur corrupti quo ad sunt veniam odio earum harum reiciendis animi nobis corporis aut!',
                'date' => '2022-05-30',
                'price' => 290,
                'discount' => 10,
            ],
            [
                'img' => 'https://picsum.photos/id/1037/400/300',
                'title' => 'California',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, vitae delectus, natus quaerat dignissimos, sapiente quis consequuntur corrupti quo ad sunt veniam odio earum harum reiciendis animi nobis corporis aut!',
                'date' => '2022-03-02',
                'price' => 699,
                'discount' => 20,
            ],
            [
                'img' => 'https://picsum.photos/id/1048/400/300',
                'title' => 'London',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, vitae delectus, natus quaerat dignissimos, sapiente quis consequuntur corrupti quo ad sunt veniam odio earum harum reiciendis animi nobis corporis aut!',
                'date' => '2022-06-21',
                'price' => 190,
                'discount' => 25,
            ],
            [
                'img' => 'https://picsum.photos/id/1036/400/300',
                'title' => 'Berlin',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, vitae delectus, natus quaerat dignissimos, sapiente quis consequuntur corrupti quo ad sunt veniam odio earum harum reiciendis animi nobis corporis aut!',
                'date' => '2022-08-15',
                'price' => 250,
                'discount' => null,
            ],
            [
                'img' => 'https://picsum.photos/id/1047/400/300',
                'title' => 'Rome',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, vitae delectus, natus quaerat dignissimos, sapiente quis consequuntur corrupti quo ad sunt veniam odio earum harum reiciendis animi nobis corporis aut!',
                'date' => '2022-04-02',
                'price' => 50,
                'discount' => 50,
            ],
        ];

        /* foreach ($trips as $trip) {
            $newTrip = new Package();
            $newTrip->img = $trip['img'];
            $newTrip->trip_name = $trip['title'];
            $newTrip->trip_description = $trip['description'];
            $newTrip->trip_date = $trip['date'];
            $newTrip->trip_price = $trip['price'];
            $newTrip->discount = $trip['discount'];
            $newTrip->save();
        }
        */
        for ($i = 0; $i < 9; $i++) {
            $newTrip = new Package();
            $newTrip->img = $faker->imageUrl(640, 480, 'travel', true);
            $newTrip->trip_name = $faker->word();
            $newTrip->trip_description = $faker->sentence(8);
            $newTrip->trip_date = $faker->date('Y-m-d', '2022-12-31');
            $newTrip->trip_price = $faker->randomFloat(2, 0, 999.99);
            $newTrip->discount = $faker->randomDigit(0, 70);
            $newTrip->save();
        }
    }
}