<?php

use App\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Product::class, 50)->create();
        // protected $fillable = ['name','image','description','price','weigth','categories_id','stok'];



        $products = [
            [
                'name' => 'Happy cat sterilised 500gr',
                'description' => 'Makanan khusus untuk kucing sterilisasi dengan berat 500 gram. Diformulasikan khusus untuk kucing yang telah menjalani proses sterilisasi untuk memenuhi kebutuhan nutrisi yang berbeda dan menjaga kesehatan mereka. Makanan ini mengandung berbagai nutrisi esensial seperti protein, vitamin, dan mineral yang membantu menjaga berat badan ideal dan kesehatan sistem pencernaan kucing Anda. Dengan tekstur yang lembut dan rasa yang lezat, makanan ini akan menjadi pilihan yang sempurna untuk memanjakan kucing sterilisasi kesayangan Anda setiap hari.',
                'price' => 70000, // Harga pasar yang disesuaikan
                'image' => 'product/no1.jpg',
                'weigth' => 500,
                'categories_id' => 1,
            ],
            [
                'name' => 'PASIR KUCING GUMPAL MEREK CAT MATE 25 Liter',
                'description' => 'Pasir gumpal untuk kucing merek Cat Mate dengan kapasitas 25 liter. Pasir gumpal ini sangat efektif dalam mengendapkan kotoran kucing dan menjaga kebersihan kandang kucing Anda. Dengan kualitas unggulan, pasir ini dapat mengurangi bau tidak sedap dan memberikan kenyamanan ekstra bagi kucing Anda. Nikmati pengalaman bersih dan higienis dengan pasir gumpal Cat Mate.',
                'price' => 150000, // Harga pasar yang disesuaikan
                'image' => 'product/no2.jpg',
                'weigth' => 25000,
                'categories_id' => 2,
            ],
            [
                'name' => 'CDC PETSHOP Makanan Kucing BEAUTY GOLD PERSIAN ADULT KITTEN 1 KARUNG',
                'description' => 'Makanan kucing Beauty Gold Persian untuk kucing dewasa dan anak-anak dalam satu karung. Diperkaya dengan nutrisi yang lengkap dan seimbang, makanan ini membantu memenuhi kebutuhan nutrisi harian kucing Anda. Kandungan protein berkualitas tinggi membantu membangun otot dan menjaga massa tubuh ideal, sedangkan vitamin dan mineral membantu mendukung sistem kekebalan tubuh yang sehat. Nikmati kualitas premium dengan Beauty Gold Persian untuk kesehatan dan kesejahteraan kucing Anda.',
                'price' => 900000, // Harga pasar yang disesuaikan
                'image' => 'product/no3.jpg',
                'weigth' => 100000,
                'categories_id' => 1,
            ],
            [
                'name' => 'cat choize salmon kitten 20kg',
                'description' => 'Makanan untuk anak kucing dengan rasa salmon, berat 20 kilogram. Mengandung protein tinggi untuk pertumbuhan yang optimal. Diformulasikan khusus untuk memenuhi kebutuhan nutrisi yang berbeda pada tahap pertumbuhan anak kucing. Makanan ini juga mengandung asam lemak omega-3 dan omega-6 yang mendukung kesehatan kulit dan bulu. Pilihan sempurna untuk kucing muda yang menyukai rasa ikan dan butuh nutrisi terbaik untuk pertumbuhan mereka.',
                'price' => 650000, // Harga pasar yang disesuaikan
                'image' => 'product/no4.jpg',
                'weigth' => 20000,
                'categories_id' => 1,
            ],
            [
                'name' => 'kandang kucing anjing kelinci 3 tingkat ukuran termurah 75x45x110',
                'description' => 'Kandang 3 tingkat untuk kucing, anjing, atau kelinci dengan ukuran 75x45x110 cm. Kokoh dan aman untuk hewan peliharaan Anda. Kandang ini dilengkapi dengan tempat tidur empuk dan tempat bermain, memberikan kenyamanan ekstra bagi hewan kesayangan Anda. Desain modern dan tahan lama, cocok untuk diletakkan di dalam rumah atau di halaman. Dengan kandang ini, hewan peliharaan Anda akan merasa aman dan bahagia.',
                'price' => 450000, // Harga pasar yang disesuaikan
                'image' => 'product/no5.jpg',
                'weigth' => 5000,
                'categories_id' => 2,
            ],
            [
                'name' => 'Obat Kutu Hewan Anjing & Kucing Bahan Alami RACOON / Flea Remover',
                'description' => 'Obat kutu untuk hewan anjing dan kucing dengan bahan alami Racoon / Flea Remover. Aman digunakan dan efektif membunuh kutu. Mengandung bahan alami yang lembut pada kulit hewan peliharaan, sehingga tidak menimbulkan iritasi. Formula inovatif dengan efek cepat, membantu menghilangkan kutu dan mencegah infestasi ulang. Dapatkan hasil maksimal dengan obat kutu Racoon / Flea Remover.',
                'price' => 75000, // Harga pasar yang disesuaikan
                'image' => 'product/no6.jpg',
                'weigth' => 500,
                'categories_id' => 2,
            ],
            [
                'name' => 'Vitamin Kucing Nafsu Makan Berat Badan Kurus Bulu Rontok Kusam',
                'description' => 'Vitamin untuk kucing yang membantu meningkatkan nafsu makan, berat badan, dan mengatasi bulu rontok. Diperkaya dengan nutrisi penting seperti protein, vitamin B kompleks, dan asam amino, vitamin ini membantu menjaga kesehatan dan vitalitas kucing Anda. Cocok untuk kucing yang mengalami masalah nafsu makan, berat badan kurang ideal, atau bulu yang rontok dan kusam. Berikan vitamin ini secara rutin untuk hasil terbaik pada kucing kesayangan Anda.',
                'price' => 125000, // Harga pasar yang disesuaikan
                'image' => 'product/no7.png',
                'weigth' => 500,
                'categories_id' => 2,
            ],
            [
                'name' => 'Pet Otic Obat Tetes Earmites / Kutu Telinga Hewan Kucing Anjing',
                'description' => 'Obat tetes untuk mengatasi kutu telinga pada hewan kucing dan anjing. Formula ampuh membunuh kutu telinga dan mencegah perkembangbiakan. Diperkaya dengan bahan alami yang lembut pada telinga hewan peliharaan. Aplikasi yang mudah dan nyaman, obat tetes ini dapat digunakan secara rutin untuk menjaga kebersihan telinga hewan kesayangan Anda. Berikan perlindungan terbaik untuk kesehatan telinga hewan peliharaan Anda.',
                'price' => 35000, // Harga pasar yang disesuaikan
                'image' => 'product/no8.png',
                'weigth' => 500,
                'categories_id' => 2,
            ],
            [
                'name' => 'Dog Cat Underpad - Alas Perlak Untuk Poop & Pee Hewan Anjing Kucing',
                'description' => 'Alas perlak untuk hewan anjing dan kucing agar lebih nyaman ketika buang air. Dilengkapi dengan lapisan penyerap yang kuat, alas perlak ini membantu menahan air dan kotoran dengan baik. Permukaan yang lembut dan tahan air menjaga hewan kesayangan Anda tetap kering dan bersih. Dengan ukuran yang tepat dan desain yang praktis, alas perlak ini sangat cocok untuk digunakan di dalam rumah atau saat bepergian. Berikan kenyamanan terbaik untuk hewan peliharaan Anda dengan Dog Cat Underpad.',
                'price' => 56000, // Harga pasar yang disesuaikan
                'image' => 'product/no9.jpg',
                'weigth' => 700,
                'categories_id' => 3,
            ],
            // Tambahkan data dan deskripsi yang lebih panjang untuk produk lainnya
        ];


        foreach($products as $product)
        {
            // Upload gambar dari folder public ke folder storage
            $imagePath = $product['image'];
            $storagePath = 'imageproducts/' . $product['image'];
            Storage::disk('public')->put($storagePath, file_get_contents(public_path($imagePath)));

            // Buat record produk di database
            Product::create([
                'name' => $product['name'],
                'description' => $product['description'],
                'price' => $product['price'],
                'image' => $storagePath,
                'weigth' => rand(1,10),
                'categories_id' => $product['categories_id'],
                'stok' => rand(1,44)
            ]);
        }

    }
}
