<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'p_name'        => 'Samsung Galaxy S9',
            'p_descr' => 'A brand new, sealed Lilac Purple Verizon Global Unlocked Galaxy S9 by Samsung. This is an upgrade. Clean ESN and activation ready.',
            'p_thumb'       => 'https://i.ebayimg.com/00/s/ODY0WDgwMA==/z/9S4AAOSwMZRanqb7/$_35.JPG?set_id=89040003C1',
            'price'       => 698.88,
            'p_category_id'=> 1,
            'p_hot' => 0,
            'p_author_id'=>1,
            'p_active'=>1,
            'p_slug'=> Str::slug('Samsung Galaxy S9'),
        ]);

        DB::table('products')->insert([
            'p_name'        => 'Apple iPhone X',
            'p_descr' => 'GSM & CDMA FACTORY UNLOCKED! WORKS WORLDWIDE! FACTORY UNLOCKED. iPhone x 64gb. iPhone 8 64gb. iPhone 8 64gb. iPhone X with iOS 11.',
            'p_thumb'       => 'https://i.ebayimg.com/00/s/MTYwMFg5OTU=/z/9UAAAOSwFyhaFXZJ/$_35.JPG?set_id=89040003C1',
            'price'       => 983.00,
            'p_category_id'=> 1,
            'p_hot' => 0,
            'p_author_id'=>1,
            'p_active'=>1,
            'p_slug'=> Str::slug('Apple iPhone X'),
        ]);

        DB::table('products')->insert([
            'p_name'        => 'Google Pixel 2 XL',
            'p_descr' => 'New condition
• No returns, but backed by eBay Money back guarantee',
            'p_thumb'       => 'https://i.ebayimg.com/00/s/MTYwMFg4MzA=/z/G2YAAOSwUJlZ4yQd/$_35.JPG?set_id=89040003C1',
            'price'       => 675.00,
            'p_category_id'=> 1,
            'p_hot' => 0,
            'p_author_id'=>1,
            'p_active'=>1,
            'p_slug'=> Str::slug('Google Pixel 2 XL'),
        ]);

        DB::table('products')->insert([
            'p_name'        => 'LG V10 H900',
            'p_descr' => 'NETWORK Technology GSM. Protection Corning Gorilla Glass 4. MISC Colors Space Black, Luxe White, Modern Beige, Ocean Blue, Opal Blue. SAR EU 0.59 W/kg (head).',
            'p_thumb'       => 'https://i.ebayimg.com/00/s/NjQxWDQyNA==/z/VDoAAOSwgk1XF2oo/$_35.JPG?set_id=89040003C1',
            'price'       => 159.99,
            'p_category_id'=> 1,
            'p_hot' => 0,
            'p_author_id'=>1,
            'p_active'=>1,
            'p_slug'=> Str::slug('LG V10 H900'),
        ]);

        DB::table('products')->insert([
            'p_name'        => 'Huawei Elate',
            'p_descr' => 'Cricket Wireless - Huawei Elate. New Sealed Huawei Elate Smartphone.',
            'p_thumb'       => 'https://ssli.ebayimg.com/images/g/aJ0AAOSw7zlaldY2/s-l640.jpg',
            'price'       => 68.00,
            'p_category_id'=> 1,
            'p_hot' => 0,
            'p_author_id'=>1,
            'p_active'=>1,
            'p_slug'=> Str::slug('Huawei Elate'),
        ]);

        DB::table('products')->insert([
            'p_name'        => 'HTC One M10',
            'p_descr' => 'The device is in good cosmetic condition and will show minor scratches and/or scuff marks.',
            'p_thumb'       => 'https://i.ebayimg.com/images/g/u-kAAOSw9p9aXNyf/s-l500.jpg',
            'price'       => 129.99,
            'p_category_id'=> 1,
            'p_hot' => 0,
            'p_author_id'=>1,
            'p_active'=>1,
            'p_slug'=> Str::slug('HTC One M10'),
        ]);
    }
}
