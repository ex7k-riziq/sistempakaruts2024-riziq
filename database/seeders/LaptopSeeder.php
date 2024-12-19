<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaptopSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('laptops')->insert([
            ['name' => 'Axioo MyBook Hype 5', 'category' => 'Produktivitas', 'min_budget' => 0, 'max_budget' => 6000000, 'specification' => '
            - Prosesor AMD Ryzen 5 5500U

            - RAM 8 GB DDR4, dapat diupgrade hingga 64GB

            - SSD 256GB

            - Windows 11 Pro

            - Layar 16:9 full HD IPS

            - Rp. 5.249.000

            - Ada juga versi Intel Gen 12 berharga 6 jutaan'],
            ['name' => 'Lenovo IdeaPad Slim 3 14IAU7', 'category' => 'Produktivitas', 'min_budget' => 0, 'max_budget' => 6000000, 'specification' =>'
            - Dilengkapi Intel i3-1215U

            - RAM 8GB DDR4, dapat diupgrade ke 16GB

            - SSD 256GB, ada tempat drive 2.5" kosong

            - Layar full HD 16:9 TN

            - Keyboard sudah backlit

            - Rp. 6.439.000'],
            ['name' => 'Advan Laptop Workplus', 'category' => 'Produktivitas', 'min_budget' => 7000000, 'max_budget' => 11000000, 'specification' =>'
            - Ada versi Intel i5 12600H dan AMD Ryzen 5 6600H

            - SSD 1TB (Ryzen) atau 512GB (i5)

            - Layar 16:10 full HD IPS

            - RAM 16GB (Ryzen), 24GB (i5)

            - Rp. 7.299.000 (AMD), 7.999.000 (Intel)'],
            ['name' => 'Axioo Pongo 725', 'category' => 'Gaming', 'min_budget' => 7000000, 'max_budget' => 11000000, 'specification' =>'
            - Dilengkapi Intel Core i7-12650H

            - GPU NVIDIA RTX 2050 4GB

            - RAM 16GB DDR5

            - SSD NVMe 1TB 

            - Layar FHD 144Hz

            - Rp. 9.799.000-10.100.000'],
            ['name' => 'HP Victus 15 fa0116TX', 'category' => 'Gaming', 'min_budget' => 7000000, 'max_budget' => 11000000, 'specification' =>'
            - Processor Intel Core i5-12500H

            - GPU NVIDIA GTX 1650 4GB

            - SSD 512GB

            - Keyboard full-size dengan backlit

            - Camera 720p HD

            - Sudah ada MS Office

            - RAM masih 8 GB DDR4-3200, upgrade ke 16GB

            - 10.599.000'],
            ['name' => 'HP Victus 15 fa0116TX', 'category' => 'Kreasi', 'min_budget' => 7000000, 'max_budget' => 11000000, 'specification' => '
            - Processor Intel Core i5-12500H

            - GPU NVIDIA GTX 1650 4GB

            - SSD 512GB

            - Keyboard full-size dengan backlit

            - Camera 720p HD

            - Sudah ada MS Office

            - RAM masih 8 GB DDR4-3200, upgrade ke 16GB

            - Rp. 10.599.000'],
            ['name' => 'Acer Aspire 14 AI', 'category' => 'Kreasi', 'min_budget' => 7000000, 'max_budget' => 11000000, 'specification' => '
            - Prosesor Intel Core i5-13420H

            - GPU NVIDIA RTX 2050 4GB

            - RAM 8GB DDR5

            - SSD 512GB

            - Layar IPS 16:10

            - Wi-Fi 6E

            - Rp. 9.939.000'],
            ['name' => 'Lenovo Ideapad 5 2 in 1', 'category' => 'Produktivitas', 'min_budget' => 12000000, 'max_budget' => 16000000, 'specification' => '
            - Laptop 2-in-1, laptop sekaligus tablet, dengan engsel 360°

            - Intel Core 7 150U

            - Layar 16:10 IPS

            - SSD 512GB

            - Terdapat stylus

            - RAM 16GB LPDDR5x-5200

            - Rp. 15.099.000 (15 jutaan beragam ribu)

            - Ada juga varian Ryzen 7 8845HS, 12 jutaan'],
            ['name' => 'HP Pavilion Aero 13', 'category' => 'Produktivitas', 'min_budget' => 12000000, 'max_budget' => 16000000, 'specification' => '
            - Berat dibawah 1 kg

            - Prosesor AMD Ryzen 7 8840U

            - RAM 16GB LPDDR5x-6400

            - SSD 1TB

            - Layar WUXGA 16:9 IPS anti-glare

            - Rp. 14.244.000'],
            ['name' => 'Infinix GT Book i5-12450H', 'category' => 'Gaming', 'min_budget' => 12000000, 'max_budget' => 16000000, 'specification' => '
            - Prosesor Intel Core i5-12450H

            - GPU NVIDIA RTX 3050 6GB

            - RAM 16GB LPDDR5x

            - SSD 512GB

            - Layar IPS 100% sRGB 120Hz 16:10

            - Wi-Fi 6E dan webcam FHD

            - Rp. 14.999.000

            - Ada varian i9-13900H dan RTX 4060, 18 jutaan'],
            ['name' => 'Infinix GT Book i5-12450H', 'category' => 'Kreasi', 'min_budget' => 12000000, 'max_budget' => 16000000, 'specification' => '
            - Prosesor Intel Core i5-12450H

            - GPU NVIDIA RTX 3050 6GB

            - RAM 16GB LPDDR5x

            - SSD 512GB

            - Layar IPS 100% sRGB 120Hz 16:10

            - Wi-Fi 6E dan webcam FHD

            - Rp. 14.999.000

            - Ada varian i9-13900H dan RTX 4060, 18 jutaan'],
            ['name' => 'ASUS Vivobook Pro 15 OLED', 'category' => 'Kreasi', 'min_budget' => 12000000, 'max_budget' => 16000000, 'specification' => '
            - Prosesor Intel Core i5-12450H

            - GPU NVIDIA RTX 3050 4GB

            - Layar OLED 2.8K (2880 x 1620) 16:9, refresh rate 120Hz

            - RAM 16GB DDR4, dapat diupgrade ke 32GB

            - SSD 512GB

            - Kamera 1080p FHD

            - Rp. 16.399.000
            
            - Terdapat varian 23-27 juta'],
        ]);
    }
}
