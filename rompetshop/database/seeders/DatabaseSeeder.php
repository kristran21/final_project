<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;
use Database\Seeders\PermissionsTableSeeder;
use Database\Seeders\RolesTableSeeder;
use Database\Seeders\ConnectRelationshipsSeeder;
use App\database\UserFactory;
use App\Models\User;
use App\Models\Admin;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Products;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        Model::unguard();

        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ConnectRelationshipsSeeder::class);
        //$this->call('UsersTableSeeder');

        Model::reguard();
        // \App\Models\User::factory(10)->create();
        User::factory()->count(9)->create();
        Admin::factory()->count(5)->create();
        DB::table('tbl_brand')->insert([
            'brand_name' => "Adult",
            'brand_desc' => "Created type successfully.",
            'brand_status' => 0,
        ]);
        DB::table('tbl_category_product')->insert([
            'category_name'=> "Leopard Gecko",
            'category_desc'=> "Leopard Gecko",
            'category_status'=> 0,
        ]);

        for($i = 0; $i <= 6; $i++){
            DB::table('tbl_product')->insert([
                'category_id'=>1,
                'brand_id'=>1,
                'product_desc'=>"A popular beginner’s reptile, the leopard gecko comes in a variety of colours and is an easily handled, small lizard. Leopard geckos are nocturnal, ground-dwelling geckos that can be found in desert environments in Afghanistan, Iran, Pakistan and parts of India. They are generally docile and easy to tame. They do not have the sticky toe pads like other geckos, so they do not climb walls, but unlike other geckos, they do have eyelids.",
                'product_name'=>"Pet No.",
                'product_content'=>"This is a new stock .",
                'product_price'=>$faker->numberBetween($min = 3, $max = 25),
                'product_image'=>"leo1.jpg",
                'product_status'=>0,
            ]);
        }

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
