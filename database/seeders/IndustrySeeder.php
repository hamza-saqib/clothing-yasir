<?php

namespace Database\Seeders;

use App\Models\Industry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\Industry::factory(12)->create();
        $industry_names = [
            ['CBD Boxes', 'Implementing the right packaging solution is an important part of your CBD product marketing strategy. CustomBoxesUS, a great source for CBD boxes, can bring innovations to your brand and create a distinct look that you need to increase sales. Make the right impression with your customers by delivering promised quality and effectiveness. Contact us!', true],
            ['Cosmetics Boxes',"It's never easy to please the consumers of the cosmetics, for which you will need to custom cosmetic boxes. With us, you can create great goodwill for your brand and can have more buyers with our box printing techniques. Contact us!", true],
            ['Gift & Festivities Boxes','---', true],
            ['Food & Beverage Boxes',"What entices the food enthusiast to make an instant purchase? It's the packaging, we at CustomBoxes provide the custom food & beverage boxes that can bring the fiesta vibe to your customer's eyes!", true],
            ['Vape Cartridge Boxes', 'Use our FDA Approved Custom Vape Cartridge boxes in order to make sure that your product has a great shelf life. With us, you can customize the packaging of your product and can many customers in a blink of an eye! Contact us!', true],
            ['Jewelry Boxes','---', true],
            ['Rigid Boxes', 'Are you in the business of shipping your products globally and want something unique to make sure your product stays safe during transit? If so, then we at CustomBoxesUs provide the best packaging solution for you "Custom Rigid Boxes." Contact us!', true],
            ['Apparel Boxes','---', true],
            ['Sports Boxes', '---', true],
            ['Custom Printed Boxes', '---', false],
            ['Boxes Styles', '---', false]//false are not industries.
        ];
        foreach ($industry_names as $key => $value) {
            try {
                Industry::create(['name'=>$value[0], 'slug'=>Str::slug($value[0]),
                'summary'=>$value[1], 'image'=>Str::slug($value[0]).'.png', 'is_industry'=>$value[2],
                'admin_id'=>1]);
            } catch (\Throwable $th) {
                //throw $th;
            }

        }
    }
}
