<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            [

            'blogCode' => 'bl01',
            'title' => 'Daytona City Commission approves plans for Bike Week',
            'image' =>'Tomoka4.jpg' ,
            'description'=> 'The reality of the COVID-19 pandemic hit the United States during Daytona Bike Week last year. The city pulled vending permits and essentially mandated an early end to the annual event that kicks off the bike rally season for most folks.',
            'content'=> '<p>Following that, no vendor permits were issued for the October “Biketoberfest” event. All that left 2021 Daytona Bike Week as a big question mark.

              This week, the Daytona Beach City Commission voted six to one to issue permits for outdoor vendors and entertainment. In exchange for getting a permit, bars, restaurants and other businesses have to limit indoor crowds to 60 percent of capacity. Bike Week is on for March 5 to 14.

              Though several commissioners expressed concerns, they ultimately voted in favor of the Bike Week master plan, noting that both business owners and most citizens they talked to were in favor of going ahead with Bike Week because of its economic importance. Commissioners and members of the public who spoke also noted that people will come anyway, so its better to have a plan in place than try to stop it.

              Ruth Trager, the one commissioner who voted "no," said she sympathized with business owners because she has suffered business setbacks herself, due to the pandemic. But she added, "Economic difficulties most often can be overcome. Unfortunately, if you die, you aint coming back."
              Historically, Bike Week has included some banger chopper shows that are a great way to scope out some sweet builds while staying outside in the Florida sunshine. The Boogie East Show at Annie Oakleys in Ormond, Willie’s Choppertime Show at Tropical Tattoo and the Rats Hole Custom Bike Show are some of my favorites, but double check the schedules before you go, because things could be different this year.

               For many riders in the colder states, finding some warm weather in Daytona Beach is a long tradition. It may be a little different this year, but Bike Week is on.</p>',

              'createdBy' => 'Văn Quyết',
                'created_at' => Carbon::now()->addDays(-1),
            ],

            [

                'blogCode'=> 'bl02',
                'title'=> 'Everything else we saw at EICMA 2021',

                'description'=> 'As EICMA 2021 draws to a close, here’s a roundup of new and unusual motorcycles that debuted at the show.',
                'content'=>'<p>The last year has been challenging for many manufacturers as they face supply shortages, shipping issues, COVID-19, and more. These headwinds might be why many of the ‘22s revealed at the show are mild updates to existing models. Let’s take a look.
                           There’s also a stars ‘n’ stripes special edition of the RS 660 to celebrate Aprilia’s winning season in MotoAmerica Twins Cup. 1,500 RS 660 Special Editions will be sold with a unique “Racing Package” that includes “a single-seat tail-fairing cover, oversized top fairing, and quick shift with upside-down gearbox.” Aprilia claims that the quickshifter can be set up for standard or upside-down shift using software, not sockets and screwdrivers, which is pretty neat. Aprilia, please send us one to try?
                                 Kawasaki acquired Bimota a couple years ago, but in that time, the new owners focused on the wild Tesi H2, which grafts Bimota’s iconic Tesi styling and hub-center steering onto Team Green’s supercharged H2 platform. Now, another pair of Kawi-based Bimotas joins the Tesi. Say hello to the KB4 and KB4 RC, based on the naturally aspirated Ninja 1000 SX.

                             These motorcycles drape retro-inspired Bimota looks over fully modern running gear. Bimota traditionally named their models with the first letter of the powerplant supplier (K for Kawasaki, in this case), the first letter of their own brand, and a number to denote how many times they’d collaborated. It’s been a few decades since the beautiful KB3 of 1983, based on the KZ1000. <p>',


                'createdBy' => 'Thanh Tùng',
                'created_at' => Carbon::now()->addDays(-1),
            ],

            [

                'blogCode' => 'bl03',
                'title'=> 'Moto Guzzi releases more details on the V100 Mandello, some of them surprising',
                'image'=> 'Moto_Guzzi_V100_Mandello_left.jpg',
                'description' => 'When I wrote a piece last week about a few motorcycles I was going to be watching for at the EICMA show,',
                'content'=> 'The V100 name doesnt indicate displacement, but rather time: Moto Guzzis century of existence. Moto Guzzi sees the Mandello as its first bike of the next hundred years and has festooned it with technology far beyond the liquid-cooled engine we could see in the teaser photos (and well beyond what I expected). The Mandello retains the traditional V-twin and shaft-drive layout Moto Guzzi is known for, but beyond that it s a departure. The heads are on sideways, the shaft drive is on the "wrong" side and then theres all that tech.
                      "Moto Guzzi V100 Mandello will represent a turning point in the brand is history, the project introducing some very important technological innovations," the company announcement stated. "It will be the very first motorcycle to offer adaptive aerodynamics, and the first Moto Guzzi to be equipped with advanced electronic solutions such as the six-axis inertial platform, cornering ABS, semi-active suspension, and the quick shifter, to cite just a few of the most important features."
                       The deflectors on the sides of the tank adjust automatically based on speed and which of the four riding modes is selected. The windscreen is also adjustable by the rider and Moto Guzzi says the adjustments can reduce air pressure on the rider by up to 22 percent, allowing the relatively svelte Mandello to provide more rider protection when desired. </p> ',
                      'createdBy' => 'Việt Hoàng',
                'created_at' => Carbon::now()->addDays(-1),
            ],

            [

                'blogCode' => 'bl04',
                'title' => 'Inside #bikelife: The urban motorcycle scene often vilified, sometimes glorified, not often understood',

                'description' => 'On a sunny afternoon in July, I fired up my supermoto in the Bronx for a ride with Malissa Alexis and Starr10K — two of New York City’s female bike life devotees.',
                'content' => '<p>Donning half helmets and personalized jerseys, both kickstarted their dirt bikes to offer a view into the urban motorcycle scene they love. For this GenX-suburban dad, it was a ride like no other. The adventure served up wheelies, jumping sidewalks, lane-splitting taxis, dodging buses and evading the NYPD — all to the backdrop of cheers and jeers from onlookers under the Bronx’s elevated subway tracks.

                    Caution aside, I have to admit the ride was quite a rush. I came away respecting the skills of my guides — while pondering the pros and cons of young folks living and loving moto stunting in America’s big cities.
                      Every few decades, some cultural trend within motorcycling captures the imagination (and ire) of the public. From Hollister in 1947 to "Hell is Angels 69," it was outlaw biker gangs. In the 1990s, it was freestyle motocross. Today is rebel motorcycle movement — the one earning a mix of fascination and detestation — is bike life.

                      So what the hell is bike life? If you haven’t heard the term, chances are you have seen news coverage or social media on its practitioners, commonly referred to by the news media as "illegal dirt-bike riders."

                     Before continuing, let me urge those who are ready to skip to comments to drop "they’re a menace" posts to keep reading. I encourage skeptics, city officials and motorcycle industry illuminati to hang with the story to the end. There is much more to this movement than a bunch of reckless kids doing wheelies. <p> ',


                   'createdBy'=> 'Anh Đức',
                'created_at' => Carbon::now()->addDays(-1),
            ],
        ]);
    }
}
