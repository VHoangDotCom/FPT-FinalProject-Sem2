<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [

                'cate_id' => 1,
                'productType' => 1,
                'productName' => 'Scorpion EXO-AT950 Helmet',
                'title' =>'SCORPION',
                'description' =>'This helmet is like having four helmets in one! It is a great option for riding multiple bikes and in multiple conditions. ',
                'pro_old_price' => 200,
                'pro_new_price' => 124,
                'pro_sale' => 12,
                'quantity' => 200,
                'status' =>'In Stock',

                'image' => 'tcx_hero_wp_boots_black_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),

            ],
            [

                'cate_id' => 1,
                'productName' => 'Sedici Strada II Horta Helmet',
                'title' =>'SEDICI',
                'description' =>'The latest iteration of the Strada series helmets adds another shell size for a lower profile fit. Slip one on and hit the road.',
                'quantity' => 200,
                'pro_old_price' => 200,
                'pro_new_price' => 269,
                'pro_sale' => 12,
                'productType' => 1,
                'status' =>'In Stock',
                'image' => 'street_steel_anarchy_leather_motorcycle_vest_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),

            ],

            [

                'cate_id' => 1,
                'productName' => 'Sedici Strada II Animale Helmet',
                'title' =>'SEDICI',
                'description' =>'The latest iteration of the Strada series helmets adds another shell size for a lower profile fit. Slip one on and hit the road.',
                'quantity' => 200,
                'pro_old_price' => 200,
                'pro_new_price' => 249,
                'pro_sale' => 12,
              'productType' => 1,
                'status' =>'In Stock',
                'image' => 'street_steel_anarchy_jacket_with_hoody_black_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),

            ],

            [

                'cate_id' => 1,
                'productName' => 'Sedici Strada II Helmet - Solid',
                'title' =>'SEDICI',
                'description' =>'The latest iteration of the Strada series helmets adds another shell size for a lower profile fit. Slip one on and hit the road.',
                'quantity' => 200,
                'pro_old_price' => 200,
                'pro_new_price' => 229,
                 'pro_sale' => 12,
               'productType' => 1,
                 'status' =>'In Stock',
                 'image' => 'sidi_adventure2_gore_tex_boots_black_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),

            ],

            [

                'cate_id' => 1,
                'productName' => 'LS2 Assault I Heart Brains Glow In The Dark Helmet',
                'title' =>'LS2 HELMETS',
                'description' =>'LS2 assaults the competition with the class-leading Assault Helmet. The Assault shell is constructed from LS2',
                'quantity' => 200,
                 'pro_old_price' => 200,
                 'pro_new_price' => 199,
                 'pro_sale' => 12,
               'productType' => 1,
                 'status' =>'In Stock',
                 'image' => 'sedici_strada2_horta_helmet_green_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),

            ],

            [

                'cate_id' => 2,
                'productName' => 'Dainese Blackjack Gloves',
                'title' =>'DAINESE',
                'description' =>'Timeless Italian taste, quality leather construction and nothing more. The Dainese Blackjack Gloves give off good vibes for the stylish summer rider.',
                'quantity' => 200,
                'pro_old_price' => 200,
                'pro_new_price' => 89,
                 'pro_sale' => 12,
               'productType' => 1,
                 'status' =>'In Stock',
                 'image' => 'sedici_strada2_helmet_black_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),


            ],

            [

                'cate_id' => 2,
                'productName' => 'BILT Sprint Gloves',
                'title' =>'BILT',
                'description' =>'The Sprint Gloves from BILT are an aggressive, short cuff glove that are ready to transport you from apex to apex in the warmer months. ',
                'quantity' => 200,
                'pro_old_price' => 200,
                'pro_new_price' => 35,
                'pro_sale' => 12,
              'productType' => 1,
                'status' =>'In Stock',
                'image' => 'sedici_strada2_animale_helmet_grey_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),


            ],

            [

                'cate_id' => 2,
                'productName' => 'REV IT! Monster 2 Gloves',
                 'title' =>'REV IT!',
                 'description' =>'Monster style meets moto protection. The REV’IT! Monster 2 Gloves use modern construction with a hard knuckle protector but maintain a vintage motif.',
                'quantity' => 200,
                 'pro_old_price' => 200,
                 'pro_new_price' => 139,
                 'pro_sale' => 12,
               'productType' => 1,
                 'status' =>'In Stock',
                 'image' => 'sedici_marco_mesh_jacket_black_black_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),


            ],

            [

                'cate_id' => 2,
                'productName' => 'Dainese Full Metal 6 Gloves',
                'title' =>'DAINESE',
                'description' =>'Heavy-hitting protection. Ultra-lightweight package. The Dainese Full Metal 6 Gloves are the ultimate in dexterity and pro-level protection.',
                'quantity' => 200,
                'pro_old_price' => 200,
                'pro_new_price' => 429,
                'pro_sale' => 12,
              'productType' => 1,
                'status' =>'In Stock',
                'image' => 'scorpion_exoat950_helmet_matte_black_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),


            ],

            [

                'cate_id' => 2,
                'productName' => 'Icon Airform Manik R Helmet',
                 'title' =>'ICON',
                 'description' =>'Built for riders who need the accouterments of a touring helmet with the performance of a track helmet. When you want to have your cake and eat it too…',
                'quantity' => 200,
                 'pro_old_price' => 200,
                 'pro_new_price' => 225,
                 'pro_sale' => 12,
               'productType' => 1,
                 'status' =>'In Stock',
                 'image' => 'scorpion_covert_flannel_shirt_black_green_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),

            ],

            [

                'cate_id' => 2,
                'productName' => 'Alpinestars SP-5 Gloves',
                'title' =>'ICON',
                'description' =>'The SP-5 Glove is packed full of features for the sporty road rider. Over-molded knuckle protection and third-to-fourth finger bridge.',
                'quantity' => 200,
                'pro_old_price' => 200,
                'pro_new_price' => 95,
                'pro_sale' => 12,
              'productType' => 1,
                'status' =>'In Stock',
                'image' => 'revit_monster2_gloves_black_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),

            ],

            [

                'cate_id' => 3,
                'productName' => 'Scorpion EXO Covert Flannel Shirt',
                'title' =>'SCORPION',
                'description' =>'Assert your individuality with the Street & Steel Anarchy Textile Jacket. Styled with the tough appearance of a street hoody and the performance specs…',
                'quantity' => 200,
                'pro_old_price' => 200,
                'pro_new_price' => 129,
                'pro_sale' => 12,
              'productType' => 1,
                'status' =>'In Stock',
                'image' => 'ls2_helmets_assault_i_heart_brains_black_glow_black_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),


            ],

            [
                'cate_id' => 3,
                'productName' => 'Fly Racing Street Flux Air Jacket',
                'title' =>'FLY RACING STREET',
                'description' =>'Assert your individuality with the Street & Steel Anarchy Textile Jacket. Styled with the tough appearance of a street hoody and the performance specs…',
                'quantity' => 200,
                'pro_old_price' => 200,
                'pro_new_price' => 119,
                'pro_sale' => 12,
              'productType' => 1,
                'status' =>'In Stock',
                'image' => 'icon_airform_manic_r_helmet_blue_white_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),


            ],

            [
                'cate_id' => 3,
                'productName' => 'Street & Steel Anarchy Jacket',
                'title' =>'ICON',
                'description' =>'Assert your individuality with the Street & Steel Anarchy Textile Jacket. Styled with the tough appearance of a street hoody and the performance specs…',
                'quantity' => 200,
                'pro_old_price' => 200,
                'pro_new_price' => 199,
                'pro_sale' => 12,
              'productType' => 1,
                'status' =>'In Stock',
                'image' => 'fly_flux_air_jacket_black_rollover.jpg',
                'created_at' => Carbon::now()->addDays(-1),

            ],

            [
                'cate_id' => 3,
                'productName' => 'Street & Steel Anarchy Leather Vest',
                'title' =>'STREET & STEEL',
                'description' =>'It is you against the flow of traffic, a solo assault where rules are bent in order to survive. Throw on the Anarchy Vest, fire up the V-Twin and join…',
                'quantity' => 200,
                'pro_old_price' => 200,
                'pro_new_price' => 199,
                'pro_sale' => 12,
              'productType' => 1,
                'status' =>'In Stock',
                'image' => 'dainese_full_metal6_gloves_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),


            ],

            [
                'cate_id' => 3,
                'productName' => 'Spidi Summer Net Women is Jacket',
                 'title' =>'SPIDI',
                 'description' =>'The Summer Net Jacket is feminine without screaming Hey Lady! Mesh where it counts and textile for abrasion resistance everywhere else. Yes!',
                'quantity' => 200,
                 'pro_old_price' => 200,
                 'pro_new_price' => 95,
                 'pro_sale' => 12,
               'productType' => 1,
                 'status' =>'In Stock',
                 'image' => 'dainese_blackjack_gloves_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),

            ],

            [
                'cate_id' => 5,
                'productName' => 'SIDI Adventure 2 Gore-Tex Boots',
                'title' =>'SIDI BOOTS',
                'description' =>'You ll appreciated the full-length Gore-Tex waterproof gaiter in the ADV 2 every time you ford that stream or ride all day in the rain. Comfy, too. ',
                'quantity' => 200,
                 'pro_old_price' => 200,
                 'pro_new_price' => 475,
                 'pro_sale' => 12,
               'productType' => 1,
                 'status' =>'In Stock',
                 'image' => 'bilt_sprint_gloves_black_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),


            ],

            [
                'cate_id' => 5,
                'productName' => 'TCX Hero WP Boots',
                'title' =>'TCX BOOTS',
                'description' =>'The Hero Boots are a blend of style and function. The leather upper is rich and thick, yet provides good shifting feel. The tread is aggressive.',
                'quantity' => 200,
                'pro_old_price' => 200,
                'pro_new_price' => 260,
                'pro_sale' => 12,
              'productType' => 1,
                'status' =>'In Stock',
                'image' => 'alpinestars_sp5_gloves_black_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),

            ],
            [
                'cate_id' => 5,
                'productName' => 'Alpinestars SMX 6 v2 Vented Boots',
                'title' =>'ALPINESTARS',
                'description' =>'You will appreciate the large flex panels at the foot front and ankle areas of the SMX-6 v2 Vented Boots. Air vents and mesh keep your feet cool. ',
                'quantity' => 200,
                'pro_old_price' => 200,
                'pro_new_price' => 290,
                'pro_sale' => 12,
              'productType' => 1,
                'status' =>'In Stock',
                'image' => 'alpinestars_boot_smx6_v2_vnt_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),


            ],
            [

                'cate_id' => 6,
                'productName' => 'Michelin Road 5 Tires',
                'title' =>'MICHELIN TIRES',
                'description' =>'Patented siping evacuates water consistently as the Road 5 Tires wear, while patented casing technology delivers superb dry handling. ',
                'quantity' => 200,
                'pro_old_price' => 200,
                'pro_new_price' => 263,
                'pro_sale' => 12,
                'productType' => 2,
                'status' =>'In Stock',
                'image' => 'michelin_road5_tires_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),

            ],
            [

                'cate_id' => 6,
                'productName' => 'Shinko 705 Dual Sport Tires',
                'title' =>'SHINKO TIRES',
                'description' =>'Designed for 80% street and 20% trail riding, the Shinko 705 has a versatile tread pattern for excellent wet and dry weather adhesion and smooth runni…',
                'quantity' => 200,
                'pro_old_price' => 200,
                'pro_new_price' => 138,
                'pro_sale' => 12,
                'productType' => 2,
                'status' =>'In Stock',
                'image' => 'shinko705_dual_sport_tires_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),

            ],
            [

                'cate_id' => 6,
                'productName' => 'Pirelli Diablo Rosso II Tires',
                'title' =>'PIRELLI',
                'description' =>'Bringing the race winning technology developed for World Superbike to the street, the Pirelli Diablo Rosso II Tires deliver superior grip and wear-lif…',
                'quantity' => 200,
                'pro_old_price' => 200,
                'pro_new_price' => 138,
                'pro_sale' => 12,
                'productType' => 2,
                'status' =>'In Stock',
                'image' => 'pirelli_diablo_rosso_ii_tires_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),


            ],
            [

                'cate_id' => 7,
                'productName' => 'Twin Power Quick-Change Oil Kit For Harley',
                'title' =>'TWIN POWER',
                'description' =>'Make a simple job even simpler. The Twin Power Quick-Change Oil Kit comes with everything you need to keep your sweet machine lubricated and ready to …',
                'quantity' => 200,
                'pro_old_price' => 200,
                'pro_new_price' => 38,
                'pro_sale' => 12,
                'productType' => 2,
                'status' =>'In Stock',
                'image' => 'twin_power_quick_change_oil_kitfor_evo_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),


            ],
            [

                'cate_id' => 7,
                'productName' => 'Motul 300V Synthetic Engine Oil',
                'title' =>'MOTUL',
                'description' =>'Passing and exceeding tests such as the JASO T904 and Bosch ASTM D6278 test, Motul 300V Synthetic Motor Oil is designed for the most rigorous demands.',
                'quantity' => 200,
                'pro_old_price' => 200,
                'pro_new_price' => 90,
                'pro_sale' => 12,
                'productType' => 2,
                'status' =>'In Stock',
                'image' => 'motul300_v_synthetic_motor_oil_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),


            ],
            [

                'cate_id' => 7,
                'productName' => 'Castrol Power 1 Synthetic 4T Engine Oil',
                'title' =>'CASTROL',
                'description' =>'Castrol POWER1 4T with Race Derived Technology is specifically designed for bikers who love the exhilaration of riding to the limit. ‘Race Derived Tec…',
                'quantity' => 200,
                'pro_old_price' => 200,
                'pro_new_price' => 16,
                'pro_sale' => 12,
                'productType' => 2,
                'status' =>'In Stock',
                'image' => 'castrol_power1_synthetic4_t_engine_oil_5_w40_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),


            ],
            [

                'cate_id' => 7,
                'productName' => 'Maxima Premium Engine Oil',
                'title' =>'MAXIMA LUBRICANTS',
                'description' =>'Maxima Maxum4 Premium Motor Oil is a high quality, mineral 4T engine oil features proprietary additive system to minimize engine deposits while protec…',
                'quantity' => 200,
                'pro_old_price' => 200,
                'pro_new_price' => 34,
                'pro_sale' => 12,
                'productType' => 2,
                'status' =>'In Stock',
                'image' => 'maxima_lubricants_premium10_w30_il12_case_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),


            ],
            [

                'cate_id' => 7,
                'productName' => 'Liqui Moly 4T Synth Street / Race Engine Oil',
                'title' =>'LIQUI MOLY',
                'description' =>'Liqui Moly 4T Street / Race Motor Oil is a fully synthetic ultra-high-performance oil that was developed to ensure maximum performance for air and wat…',
                'quantity' => 200,
                'pro_old_price' => 200,
                'pro_new_price' => 67,
                'pro_sale' => 12,
                'productType' => 2,
                'status' =>'In Stock',
                'image' => 'liqui_moly4_t_synthetic_street_race_engine_oil_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),


            ],
            [

                'cate_id' => 7,
                'productName' => 'Motul 5100 4T Engine Oil',
                'title' =>'MOTUL',
                'description' =>'Motul 5100 4T is ideal for street bikes, trail and all off-road bikes with 4 Stroke engines, integrated gearboxes or not, wet or dry clutches, engines… ',
                'quantity' => 200,
                'pro_old_price' => 200,
                'pro_new_price' => 53,
                'pro_sale' => 12,
                'productType' => 2,
                'status' =>'In Stock',
                'image' => 'motul510010_w40_quart_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),

            ],
            [


                'cate_id' => 7,
                'productName' => 'Maxima Super M Engine Oil',
                'title' =>'MAXIMA LUBRICANTS',
                'description' =>'Maxima Super M Motor Oil is a smokeless, low-ash ester based semi-synthetic blend 2 stroke engine oil. Designed for use in all high performance 2-stro…',
                'quantity' => 200,
                'pro_old_price' => 200,
                'pro_new_price' => 32,
                'pro_sale' => 12,
                'productType' => 2,
                'status' =>'In Stock',
                'image' => 'maxima_super_m_engine_oil_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),

            ],
            [

                'cate_id' => 8,
                'productName' => 'New Ray Toys 2014 KTM 1290 Super Duke R 1:12',
                'title' =>'NEW RAY TOYS',
                'description' =>'Maxima Super M Motor Oil is a smokeless, low-ash ester based semi-synthetic blend 2 stroke engine oil. Designed for use in all high performance 2-stro…',
                'quantity' => 200,
                'pro_old_price' => 200,
                'pro_new_price' => 18,
                'pro_sale' => 12,
                'productType' => 2,
                'status' =>'In Stock',
                'image' => 'new_ray_toys2014_ktm1290_super_duke_r112_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),

            ],
            [

                'cate_id' => 8,
                'productName' => 'New Ray Toys 2011 Kawasaki ZX-14 1:12 Model',
                'title' =>'NEW RAY TOYS',
                'description' =>'Maxima Super M Motor Oil is a smokeless, low-ash ester based semi-synthetic blend 2 stroke engine oil. Designed for use in all high performance 2-stro…',
                'quantity' => 200,
                'pro_old_price' => 200,
                'pro_new_price' => 17,
                'pro_sale' => 12,
                'productType' => 2,
                'status' =>'In Stock',
                'image' => 'new_ray_toys2011_kawasaki_zx14112_model_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),

            ],
            [

                'cate_id' => 8,
                'productName' => 'New Ray Toys Yamaha YZF-R1 1:12 Model',
                'title' =>'NEW RAY TOYS',
                'description' =>'Maxima Super M Motor Oil is a smokeless, low-ash ester based semi-synthetic blend 2 stroke engine oil. Designed for use in all high performance 2-stro…',
                'quantity' => 200,
                'pro_old_price' => 200,
                'pro_new_price' => 19,
                'pro_sale' => 12,
                'productType' => 2,
                'status' =>'In Stock',
                'image' => 'new_ray_toys_newray_yamaha_yzfr1112_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),

            ],
            [

                'cate_id' => 8,
                'productName' => 'New Ray Toys Polaris RZR XP1000 1:18 Model',
                'title' =>'NEW RAY TOYS',
                'description' =>'Maxima Super M Motor Oil is a smokeless, low-ash ester based semi-synthetic blend 2 stroke engine oil. Designed for use in all high performance 2-stro…',
                'quantity' => 200,
                'pro_old_price' => 200,
                'pro_new_price' => 20,
                'pro_sale' => 12,
                'productType' => 2,
                'status' =>'In Stock',
                'image' => 'new_ray_toys_polaris_rzrxp1000118_model_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),

            ],
            [

                'cate_id' => 8,
                'productName' => 'New Ray Toys 2010 CBR1000RR 1:6 Model',
                'title' =>'NEW RAY TOYS',
                'description' =>'Maxima Super M Motor Oil is a smokeless, low-ash ester based semi-synthetic blend 2 stroke engine oil. Designed for use in all high performance 2-stro…',
                'quantity' => 200,
                'pro_old_price' => 200,
                'pro_new_price' => 56,
                'pro_sale' => 12,
                'productType' => 2,
                'status' =>'In Stock',
                'image' => 'new_ray_toys2010_cbr1000_rr16_model_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),

            ],
            [

                'cate_id' => 8,
                'productName' => 'BMW Double R Teddy Bear',
                'title' =>'NEW RAY TOYS',
                'description' =>'Maxima Super M Motor Oil is a smokeless, low-ash ester based semi-synthetic blend 2 stroke engine oil. Designed for use in all high performance 2-stro…',
                'quantity' => 200,
                'pro_old_price' => 200,
                'pro_new_price' => 19,
                'pro_sale' => 12,
                'productType' => 2,
                'status' =>'In Stock',
                'image' => 'bmw_double_r_teddy_bear_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),

            ],
            [

                'cate_id' => 9,
                'productName' => 'Sena 10C Pro Bluetooth Headset & Camera',
                'title' =>'SENA',
                'description' =>'Motovloggers, rejoice! The beloved 10C has been updated and features improved optics, recording and connectivity.',
                'quantity' => 200,
                'pro_old_price' => 200,
                'pro_new_price' => 349,
                'pro_sale' => 12,
                'productType' => 2,
                'status' =>'In Stock',
                'image' => 'sena10_c_pro_bluetooth_headset_camera_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),

            ],
            [

                'cate_id' => 9,
                'productName' => 'Sena Bluetooth Audio Back For GoPro With Waterproof Housing',
                'title' =>'SENA',
                'description' =>'The GP10 cuts down on post-processing time by recording voice from your Sena or non-Sena Bluetooth unit directly onto your Go Pros audio track.',
                'quantity' => 200,
                 'pro_old_price' => 200,
                 'pro_new_price' => 129,
                 'pro_sale' => 12,
                'productType' => 2,
                 'status' =>'In Stock',
                 'image' => 'sena_bluetooth_audio_pack_for_gopro_with_waterproof_housing_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),


            ],
            [

                'cate_id' => 9,
                'productName' => 'RAM Mounts U-Bolt Short Arm GoPro Kit',
                'title' =>'RAM MOUNTS',
                'description' =>'The RAM-B-149Z-A-GOP1U consists of a zinc coated u-bolt base, short 2" double socket arm and 1" diameter ball with custom GoPro® Hero adapter. The mou…',
                'quantity' => 200,
                'pro_old_price' => 200,
                'pro_new_price' => 39,
                'pro_sale' => 12,
                'productType' => 2,
                'status' =>'In Stock',
                'image' => 'ram_mounts_u_bolt_go_pro_kit_black_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),


            ],
            [

                'cate_id' => 9,
                'productName' => 'Sena Prism Li-Ion Rechargeable Battery',
                'title' =>'SENA',
                'description' =>'Maxima Super M Motor Oil is a smokeless, low-ash ester based semi-synthetic blend 2 stroke engine oil. Designed for use in all high performance 2-stro…',
                'quantity' => 200,
                'pro_old_price' => 200,
                'pro_new_price' => 18,
                'pro_sale' => 12,
                'productType' => 2,
                'status' =>'In Stock',
                'image' => 'sena_prism_li_ion_rechargeable_battery_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),

            ],
            [

                'cate_id' => 9,
                'productName' => 'Drift Stealth 2 HDMI Cable',
                'title' =>'DRIFT',
                'description' =>'This HDMI cable enables you to connect the Drift Stealth 2 to any devices with a HDMI input. Stream live video or plug in for instant playback and vie…',
                'quantity' => 200,
                'pro_old_price' => 200,
                'pro_new_price' => 20,
                'pro_sale' => 12,
                'productType' => 2,
                'status' =>'In Stock',
                'image' => 'drift_stealth2_hdmi_cable_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),


            ],

        ]);
    }
}
