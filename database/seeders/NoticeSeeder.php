<?php

namespace Database\Seeders;

use App\Models\Notice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Notice::create([
            'name'=>"আখেরি চাহার সোম্বা উপলক্ষে ইনস্টিটিউট বন্ধের নোটিশ",
            'file'=>"200920231695201753-notice.jpg",
            'user_id'=>"1",
        ]);
        Notice::create([
            'name'=>"ডিপ্লোমা ইন ইঞ্জিনিয়ারিং শিক্ষাক্রমের ২০১৬ প্রবিধানভুক্ত ৩য় পর্ব পরিপূরক পরীক্ষার সময়সূচি",
            'file'=>"200920231695201783-notice.pdf",
            'user_id'=>"1",
        ]);
        Notice::create([
            'name'=>"ডিপ্লোমা-ইন-ইঞ্জিনিয়ারিং শিক্ষাক্রমের সকল পর্বের সেমিষ্টার ফি প্রদানের নোটিশ",
            'file'=>"200920231695201833-notice.jpg",
            'user_id'=>"1",
        ]);
        Notice::create([
            'name'=>"ডিপ্লোমা-ইন-টেক্সটাইল ইঞ্জিনিয়ারিং শিক্ষাক্রমের ২য়,৪র্থ পর্বের পর্ব মধ্য পরীক্ষা ২০২৩ এর সময়সূচি",
            'file'=>"200920231695202111-notice.pdf",
            'user_id'=>"1",
        ]);
    }
}
