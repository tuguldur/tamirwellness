<?php

use Illuminate\Database\Seeder;
use App\commentEnglish;
use App\commentMongolia;
class comment_english extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $comment = new commentEnglish;
         $comment->name = "valandroy";
         $comment->comment = "The camp is so peaceful after the Trans Siberian. It is about 90 minutes drive but the park itself is worth it. We visited start of October so only one other couple staying. The Gers are very comfy and a great experience. The fire was lit when we arrived and the young girls keep it going for you, even stoking it again at 6am. The girls also carried our luggage for us.The food was terrific, with plenty to eat and there is hot water for a cuppa in your ger.The bathrooms are seperate but very clean and the water was hot.";
         $comment->save();

         $comment = new commentEnglish;
         $comment->name = "Heather K";
         $comment->comment = "Absolutely Excellent in Every Way. WE LOVED TAMIR CAMP! This ger camp is tucked away in a place of extraordinary beauty. Trails everywhere, each one leading to a unique view. Delicious food, felt totally cared for by the Tamir staff. Immaculate facility. Glorious! We didn't want to leave.";
         $comment->save();
         
         $comment = new commentEnglish;
         $comment->name = "Kate T";
         $comment->comment = "We had an excellent experience at the Tamir Wellness Camp where we stayed as part of a Real Russia Trans-Mongolian Train Tour. The ger was clean and spacious and very comfortable - we slept incredibly well during our stay. ... The food was tasty and we also paid extra for a massage in the dedicated 'massage ger' which was very relaxing. This is a great location for exploring the surrounding area including Turtle Rock and the Genghis Khan monument - highly recommend!!";
         $comment->save();
        //  MONGOLIA
        $comment_mn = new commentMongolia;
        $comment_mn->name = "valandroy";
        $comment_mn->comment = "The camp is so peaceful after the Trans Siberian. It is about 90 minutes drive but the park itself is worth it. We visited start of October so only one other couple staying. The Gers are very comfy and a great experience. The fire was lit when we arrived and the young girls keep it going for you, even stoking it again at 6am. The girls also carried our luggage for us.The food was terrific, with plenty to eat and there is hot water for a cuppa in your ger.The bathrooms are seperate but very clean and the water was hot.";
        $comment_mn->save();

        $comment_mn = new commentMongolia;
        $comment_mn->name = "Heather K";
        $comment_mn->comment = "Absolutely Excellent in Every Way. WE LOVED TAMIR CAMP! This ger camp is tucked away in a place of extraordinary beauty. Trails everywhere, each one leading to a unique view. Delicious food, felt totally cared for by the Tamir staff. Immaculate facility. Glorious! We didn't want to leave.";
        $comment_mn->save();
        
        $comment_mn = new commentMongolia;
        $comment_mn->name = "Kate T";
        $comment_mn->comment = "We had an excellent experience at the Tamir Wellness Camp where we stayed as part of a Real Russia Trans-Mongolian Train Tour. The ger was clean and spacious and very comfortable - we slept incredibly well during our stay. ... The food was tasty and we also paid extra for a massage in the dedicated 'massage ger' which was very relaxing. This is a great location for exploring the surrounding area including Turtle Rock and the Genghis Khan monument - highly recommend!!";
        $comment_mn->save();
    }
}
