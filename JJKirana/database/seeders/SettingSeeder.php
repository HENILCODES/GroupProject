<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Setting::create([
            'id'=>'1',
            'type'=>'contact',
            'value'=>'{"contact":"9081807209","email":"henil@gmail.com","address":"Ashirwad Socitey Ground Floor Gunajn Vapi","map":"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d685.6736435822922!2d72.92666563195735!3d20.379083617564568!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0cff27d31db7d%3A0xcb1f972ff953df8b!2sJAY%20JAGDAMBA%20KIRANA%20STORE%20(%20J%20J%20KIRANA%20STORE%20)!5e0!3m2!1sen!2sin!4v1684209770972!5m2!1sen!2sin","social":{"whatsapp":"f","facebook":"f"},"line":["Adipisci asperiores ipsum ipsa repellat consequatur repudiandae quisquam assumenda","Adipisci asperiores ipsum ipsa repellat consequatur repudiandae "]}'
        ]);
        Setting::create([
            'id'=>'2',
            'type'=>'home-top-banner',
            'value'=>'{"first":"01.jpg","second":"02.jpg","slider":{"first":{"url":"1","image":"01.jpg"},"second":{"url":"5","image":"02.jpg"},"third":{"url":"4","image":"03.jpg"}}}'
        ]);
        Setting::create([
            'id'=>'3',
            'type'=>'home-countdown-offer',
            'value'=>'{"title":"D offer for vegetable items","description":"Nice sed quod autem molestiae aut modi minus" ,"endDate":"2024/10/18","offer":"20%","image":"countdown.png"}'
        ]);
        Setting::create([
            'id'=>'4',
            'type'=>'home-promo',
            'value'=>'{"first":"03.jpg","second":"05.jpg"}'
        ]);
    }
}
