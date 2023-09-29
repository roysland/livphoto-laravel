<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("portfolios")->insert([
            array(
                "gallery_order" => 1,
                "url" => "https://makeup.livjansen.no/images/clean_beauty/001.jpg",
                "category" => "Clean Beauty",
            ),
            array(
                "gallery_order" => 1,
                "url" => "https://makeup.livjansen.no/images/clean_beauty/010.jpg",
                "category" => "Clean Beauty",
            ),
            array(
                "gallery_order" => 3,
                "url" => "https://makeup.livjansen.no/images/clean_beauty/015.jpg",
                "category" => "Clean Beauty",
            ),
            array(
                "gallery_order" => 4,
                "url" => "https://makeup.livjansen.no/images/clean_beauty/020.jpg",
                "category" => "Clean Beauty",
            ),
            array(
                "gallery_order" => 5,
                "url" => "https://makeup.livjansen.no/images/clean_beauty/040.jpg",
                "category" => "Clean Beauty",
            ),
            array(
                "gallery_order" => 6,
                "url" => "https://makeup.livjansen.no/images/clean_beauty/373482191_1505468083555857_2918885413268536246_n.jpg",
                "category" => "Clean Beauty",
            ),
            array(
                "gallery_order" => 1,
                "url" => "https://makeup.livjansen.no/images/beauty/000.jpg",
                "category" => "Beauty",
            ),
            array(
                "gallery_order" => 2,
                "url" => "https://makeup.livjansen.no/images/beauty/00019.jpg",
                "category" => "Beauty",
            ),
            array(
                "gallery_order" => 3,
                "url" => "https://makeup.livjansen.no/images/makeup_art/002.jpg",
                "category" => "Beauty",
            ),
            array(
                "gallery_order" => 4,
                "url" => "https://makeup.livjansen.no/images/beauty/001.jpg",
                "category" => "Beauty",
            ),
            array(
                "gallery_order" => 5,
                "url" => "https://makeup.livjansen.no/images/beauty/004.jpg",
                "category" => "Beauty",
            ),
            array(
                "gallery_order" => 6,
                "url" => "https://makeup.livjansen.no/images/beauty/006.jpg",
                "category" => "Beauty",
            ),
            array(
                "gallery_order" => 7,
                "url" => "https://makeup.livjansen.no/images/beauty/007.jpg",
                "category" => "Beauty",
            ),
            array(
                "gallery_order" => 8,
                "url" => "https://makeup.livjansen.no/images/beauty/009.jpg",
                "category" => "Beauty",
            ),
            array(
                "gallery_order" => 9,
                "url" => "https://makeup.livjansen.no/images/beauty/010.jpg",
                "category" => "Beauty",
            ),
            array(
                "gallery_order" => 10,
                "url" => "https://makeup.livjansen.no/images/beauty/018.jpg",
                "category" => "Beauty",
            ),
            array(
                "gallery_order" => 11,
                "url" => "https://makeup.livjansen.no/images/beauty/020.jpg",
                "category" => "Beauty",
            ),
            array(
                "gallery_order" => 12,
                "url" => "https://makeup.livjansen.no/images/beauty/375692989_968607351110364_6983575906122923462_n.jpg",
                "category" => "Beauty",
            ),
            array(
                "gallery_order" => 13,
                "url" => "https://makeup.livjansen.no/images/beauty/003.jpg",
                "category" => "Beauty",
            ),
            array(
                "gallery_order" => -8,
                "url" => "https://makeup.livjansen.no/images/makeup_art/001.jpg",
                "category" => "Makeup Art",
            ),
            array(
                "gallery_order" => -8,
                "url" => "https://makeup.livjansen.no/images/makeup_art/003.jpg",
                "category" => "Makeup Art",
            ),
            array(
                "gallery_order" => 4,
                "url" => "https://makeup.livjansen.no/images/makeup_art/030.jpg",
                "category" => "Makeup Art",
            ),
            array(
                "gallery_order" => 1,
                "url" => "https://makeup.livjansen.no/images/makeup_art/035.jpg",
                "category" => "Makeup Art",
            ),
            array(
                "gallery_order" => 4,
                "url" => "https://makeup.livjansen.no/images/makeup_art/377347076_322699496831144_8519204421086212943_n.jpg",
                "category" => "Makeup Art",
            ),
            array(
                "gallery_order" => 6,
                "url" => "https://makeup.livjansen.no/images/makeup_art/040.jpg",
                "category" => "Makeup Art",
            ),
            array(
                "gallery_order" => 7,
                "url" => "https://makeup.livjansen.no/images/makeup_art/060.jpg",
                "category" => "Makeup Art",
            ),
            array(
                "gallery_order" => 9,
                "url" => "https://makeup.livjansen.no/images/makeup_art/070.jpg",
                "category" => "Makeup Art",
            ),
            array(
                "gallery_order" => 8,
                "url" => "https://makeup.livjansen.no/images/makeup_art/075.jpg",
                "category" => "Makeup Art",
            ),
            array(
                "gallery_order" => 1,
                "url" => "https://makeup.livjansen.no/images/fashion/001.jpg",
                "category" => "Fashion",
            ),
            array(
                "gallery_order" => 2,
                "url" => "https://makeup.livjansen.no/images/fashion/004.jpg",
                "category" => "Fashion",
            ),
            array(
                "gallery_order" => 3,
                "url" => "https://makeup.livjansen.no/images/fashion/005.jpg",
                "category" => "Fashion",
            ),
            array(
                "gallery_order" => 4,
                "url" => "https://makeup.livjansen.no/images/fashion/LIV__37439.jpg",
                "category" => "Fashion",
            ),
            array(
                "gallery_order" => 5,
                "url" => "https://makeup.livjansen.no/images/fashion/007.jpg",
                "category" => "Fashion",
            ),
            array(
                "gallery_order" => 6,
                "url" => "https://makeup.livjansen.no/images/fashion/030.jpg",
                "category" => "Fashion",
            ),
            array(
                "gallery_order" => 7,
                "url" => "https://makeup.livjansen.no/images/fashion/040.jpg",
                "category" => "Fashion",
            ),
            array(
                "gallery_order" => 8,
                "url" => "https://makeup.livjansen.no/images/fashion/299.jpg",
                "category" => "Fashion",
            ),
            array(
                "gallery_order" => 9,
                "url" => "https://makeup.livjansen.no/images/fashion/300.jpg",
                "category" => "Fashion",
            ),
            array(
                "gallery_order" => 1,
                "url" => "https://makeup.livjansen.no/images/music/000.jpg",
                "category" => "Music",
            ),
            array(
                "gallery_order" => 2,
                "url" => "https://makeup.livjansen.no/images/music/001.jpg",
                "category" => "Music",
            ),
            array(
                "gallery_order" => 3,
                "url" => "https://makeup.livjansen.no/images/music/002.jpg",
                "category" => "Music",
            ),
            array(
                "gallery_order" => 4,
                "url" => "https://makeup.livjansen.no/images/music/007.jpg",
                "category" => "Music",
            ),
            array(
                "gallery_order" => 5,
                "url" => "https://makeup.livjansen.no/images/music/008.jpg",
                "category" => "Music",
            ),
            array(
                "gallery_order" => 6,
                "url" => "https://makeup.livjansen.no/images/music/010.jpg",
                "category" => "Music",
            ),
            array(
                "gallery_order" => 7,
                "url" => "https://makeup.livjansen.no/images/music/020.jpg",
                "category" => "Music",
            ),
            array(
                "gallery_order" => 8,
                "url" => "https://makeup.livjansen.no/images/music/030.jpg",
                "category" => "Music",
            ),
            array(
                "gallery_order" => 9,
                "url" => "https://makeup.livjansen.no/images/music/040.jpg",
                "category" => "Music",
            ),
            array(
                "gallery_order" => 10,
                "url" => "https://makeup.livjansen.no/images/music/050.jpg",
                "category" => "Music",
            ),
            array(
                "gallery_order" => 11,
                "url" => "https://makeup.livjansen.no/images/music/373080677_1004366054200220_8537401134702485058_n.jpg",
                "category" => "Music",
            ),
            array(
                "gallery_order" => 12,
                "url" => "https://makeup.livjansen.no/images/music/373400067_1446761026169169_4905043657215797048_n.jpg",
                "category" => "Music",
            ),
            array(
                "gallery_order" => 13,
                "url" => "https://makeup.livjansen.no/images/music/375693344_321844553654332_1396009063360481643_n.jpg",
                "category" => "Music",
            ),
            array(
                "gallery_order" => 13,
                "url" => "https://makeup.livjansen.no/images/music/375758604_840082027643821_5000426539399003809_n.jpg",
                "category" => "Music",
            ),
            array(
                "gallery_order" => 1,
                "url" => "https://makeup.livjansen.no/images/print_and_media/001.jpg",
                "category" => "Print and Media",
            ),
            array(
                "gallery_order" => 1,
                "url" => "https://makeup.livjansen.no/images/print_and_media/010.jpg",
                "category" => "Print and Media",
            ),
            array(
                "gallery_order" => 3,
                "url" => "https://makeup.livjansen.no/images/print_and_media/020.jpg",
                "category" => "Print and Media",
            ),
            array(
                "gallery_order" => 4,
                "url" => "https://makeup.livjansen.no/images/print_and_media/030.jpg",
                "category" => "Print and Media",
            ),
            array(
                "gallery_order" => 5,
                "url" => "https://makeup.livjansen.no/images/print_and_media/040.jpg",
                "category" => "Print and Media",
            ),
            array(
                "gallery_order" => 6,
                "url" => "https://makeup.livjansen.no/images/print_and_media/060.jpg",
                "category" => "Print and Media",
            ),
            array(
                "gallery_order" => 7,
                "url" => "https://makeup.livjansen.no/images/print_and_media/070.jpg",
                "category" => "Print and Media",
            ),
            array(
                "gallery_order" => 8,
                "url" => "https://makeup.livjansen.no/images/print_and_media/080.jpg",
                "category" => "Print and Media",
            ),
            array(
                "gallery_order" => 9,
                "url" => "https://makeup.livjansen.no/images/print_and_media/085.jpg",
                "category" => "Print and Media",
            ),
            array(
                "gallery_order" => 10,
                "url" => "https://makeup.livjansen.no/images/print_and_media/090.jpg",
                "category" => "Print and Media",
            ),
            array(
                "gallery_order" => 11,
                "url" => "https://makeup.livjansen.no/images/print_and_media/095.jpg",
                "category" => "Print and Media",
            ),
            array(
                "gallery_order" => 12,
                "url" => "https://makeup.livjansen.no/images/print_and_media/100.jpg",
                "category" => "Print and Media",
            ),
            array(
                "gallery_order" => 13,
                "url" => "https://makeup.livjansen.no/images/print_and_media/110.jpg",
                "category" => "Print and Media",
            ),
            array(
                "gallery_order" => 14,
                "url" => "https://makeup.livjansen.no/images/print_and_media/120.jpg",
                "category" => "Print and Media",
            ),
            array(
                "gallery_order" => 15,
                "url" => "https://makeup.livjansen.no/images/print_and_media/200.jpg",
                "category" => "Print and Media",
            ),
            array(
                "gallery_order" => 16,
                "url" => "https://makeup.livjansen.no/images/print_and_media/375761671_3506351516288465_5796946010139009304_n.jpg",
                "category" => "Print and Media",
            ),
            array(
                "gallery_order" => 1,
                "url" => "https://makeup.livjansen.no/images/behind_the_scenes/1534718_10151849573631968_1285703353_o.jpg",
                "category" => "Behind the Scenes",
            ),
            array(
                "gallery_order" => 2,
                "url" => "https://makeup.livjansen.no/images/behind_the_scenes/1548150_10151840084111968_1736554453_o.jpg",
                "category" => "Behind the Scenes",
            ),
            array(
                "gallery_order" => 3,
                "url" => "https://makeup.livjansen.no/images/behind_the_scenes/1602194_10151826961531968_1238093507_o.jpg",
                "category" => "Behind the Scenes",
            ),
            array(
                "gallery_order" => 4,
                "url" => "https://makeup.livjansen.no/images/behind_the_scenes/1602194_10151826961541968_1946592696_o.jpg",
                "category" => "Behind the Scenes",
            ),
            array(
                "gallery_order" => 5,
                "url" => "https://makeup.livjansen.no/images/behind_the_scenes/1604535_10151857847331968_1289643490_n.jpg",
                "category" => "Behind the Scenes",
            ),
            array(
                "gallery_order" => 6,
                "url" => "https://makeup.livjansen.no/images/behind_the_scenes/174137105_10157730321266968_2250983687399362275_n.jpg",
                "category" => "Behind the Scenes",
            ),
            array(
                "gallery_order" => 7,
                "url" => "https://makeup.livjansen.no/images/behind_the_scenes/175151996_10157730321276968_8742164423409227360_n.jpg",
                "category" => "Behind the Scenes",
            ),
            array(
                "gallery_order" => 8,
                "url" => "https://makeup.livjansen.no/images/behind_the_scenes/200.jpg",
                "category" => "Behind the Scenes",
            ),
            array(
                "gallery_order" => 9,
                "url" => "https://makeup.livjansen.no/images/behind_the_scenes/371502436_203295946096562_8283953648805384493_n.jpg",
                "category" => "Behind the Scenes",
            ),
            array(
                "gallery_order" => 10,
                "url" => "https://makeup.livjansen.no/images/behind_the_scenes/371801102_628630406069303_3784123960157684766_n.jpg",
                "category" => "Behind the Scenes",
            ),
            array(
                "gallery_order" => 11,
                "url" => "https://makeup.livjansen.no/images/behind_the_scenes/372898397_6361722347210882_5092973601304390072_n.jpg",
                "category" => "Behind the Scenes",
            ),
            array(
                "gallery_order" => 12,
                "url" => "https://makeup.livjansen.no/images/behind_the_scenes/373053927_852741466207893_8889738158165796220_n.jpg",
                "category" => "Behind the Scenes",
            ),
            array(
                "gallery_order" => 13,
                "url" => "https://makeup.livjansen.no/images/behind_the_scenes/373465041_242315165477713_355312006791626527_n.jpg",
                "category" => "Behind the Scenes",
            ),
            array(
                "gallery_order" => 14,
                "url" => "https://makeup.livjansen.no/images/behind_the_scenes/373473779_311330278249128_7532738184616043668_n.jpg",
                "category" => "Behind the Scenes",
            ),
            array(
                "gallery_order" => 15,
                "url" => "https://makeup.livjansen.no/images/behind_the_scenes/373474366_693209592699642_3478785472833770666_n.jpg",
                "category" => "Behind the Scenes",
            ),
            array(
                "gallery_order" => 16,
                "url" => "https://makeup.livjansen.no/images/behind_the_scenes/373491710_1358287775103499_7112079056303235672_n.jpg",
                "category" => "Behind the Scenes",
            ),
            array(
                "gallery_order" => 17,
                "url" => "https://makeup.livjansen.no/images/behind_the_scenes/375204092_607440908267693_7163086765171210596_n.jpg",
                "category" => "Behind the Scenes",
            ),
            array(
                "gallery_order" => 18,
                "url" => "https://makeup.livjansen.no/images/behind_the_scenes/375630672_1258907274816192_6056150542929008209_n.jpg",
                "category" => "Behind the Scenes",
            ),
            array(
                "gallery_order" => 19,
                "url" => "https://makeup.livjansen.no/images/behind_the_scenes/375693344_321844553654332_1396009063360481643_n.jpg",
                "category" => "Behind the Scenes",
            ),
            array(
                "gallery_order" => 20,
                "url" => "https://makeup.livjansen.no/images/behind_the_scenes/375695613_875372717231197_7077105013498173581_n.jpg",
                "category" => "Behind the Scenes",
            ),
            array(
                "gallery_order" => 21,
                "url" => "https://makeup.livjansen.no/images/behind_the_scenes/376386115_701295831813559_6748935655311774081_n.jpg",
                "category" => "Behind the Scenes",
            ),
            array(
                "gallery_order" => 22,
                "url" => "https://makeup.livjansen.no/images/makeup_art/080.jpg",
                "category" => "Behind the Scenes",
            ),
            array(
                "gallery_order" => 23,
                "url" => "http://localhost:8000/images/1.jpg",
                "category" => "Clean Beauty",
            ),
        ]);
    }
}
