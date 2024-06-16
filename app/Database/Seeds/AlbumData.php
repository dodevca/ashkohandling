<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AlbumData extends Seeder
{
	public function run()
	{
        $this->db->table('airport')->insertBatch([
            [
                'name' => 'Adam Tour',
                'logo' => '1692988485_15fdd84a6e5647afc9b7.jpg',
            ],
            [
                'name' => 'Adeem Tour',
                'logo' => '1692988983_e004cb36e6d398554dc2.png',
            ],
            [
                'name' => 'Azwar Tour & Travel',
                'logo' => '1692989098_c0b2d824e26ffa74c7ea.jpg',
            ],
            [
                'name' => 'Attin Nabila',
                'logo' => '1692989136_6dcd121d6837b21c1e33.jpg'
            ],
            [
                'name' => 'Aero Umroh Nusantara',
                'logo' => '1692989154_f5438af2bed006f4ec24.jpg'
            ],
            [
                'name' => 'AFI Tour',
                'logo' => '1692989189_c4d600e0384541059ff3.jpg'
            ],
            [
                'name' => 'AWI Tour & Travel', 
                'logo' => '1692989205_8561600c1202f8f94695.jpg'
            ],
            [
                'name' => 'Berkah Haromain',
                'logo' => '1692989221_e7474a1007b0b97caf23.jpg'
            ],
            [
                'name' => 'Duta Mulia',
                'logo' => '1692989258_1b287331325a14d8b9d9.png'
            ],
            [
                'name' => 'Garis Lurus',
                'logo' => '1692989318_23a36c498611466efe59.png'
            ],
            [
                'name' => 'Haqeem Travel',
                'logo' => '1692989369_62c75e0879b5f733d675.jpg'
            ],
            [
                'name' => 'Hariza Tour',
                'logo' => '1692989377_a81ad4fc0f1a4ec30fa0.jpg '
            ],
            [
                'name' => 'Jejak Imani',
                'logo' => '1692989395_6275f96c94a01f9310f5.jpg'
            ],
            [
                'name' => 'M2NET',
                'logo' => '1692989417_b5d8a5a9aad0fb64185f.jpg'
            ],
            [
                'name' => 'MUI Tour & Travel',
                'logo' => '1692989445_5d85db84c0cf72cb40b0.jpg'
            ],
            [
                'name' => 'Noor Abika',
                'logo' => '1692989461_825dc1425f5a578caca4.jpg'
            ],
            [
                'name' => 'Shafwah Tour & Travel',
                'logo' => '1692989479_bcc5af7aaa8c0c03ac26.jpg'
            ],
            [
                'name' => 'Thalieb Tour',
                'logo' => '1692989491_602f2a4e3aa84a888ff4.jpg'
            ],
            [
                'name' => 'Wifa Tour',
                'logo' => '1692989500_a45cad50e3cd55ddef9a.png'
            ],
            [
                'name' => 'Zafa Tour',
                'logo' => '1692989507_235aa1578d524a310c60.jpg'
            ],
            [
                'name' => 'Zein Tour',
                'logo' => '1692989514_d3793246f117d9bbb19c.png'
            ]
        ]);
	}
}