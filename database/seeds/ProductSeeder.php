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
        $products = [
            [
                'name' => 'Boardshort Barker Seven 01',
                'description' => 'Celana Pendek Barkerseven tersedia dalam ukuran (S/M/L/XL) yang dapat dipilih saat checkout. Ukuran berdasarkan lingkar pinggang dan panjangnya adalah sebagai berikut: Ukuran 28 (S): 32cm x 40cm, Ukuran 30 (M): 33cm x 41cm, Ukuran 32 (L): 34cm x 42cm, dan Ukuran 34 (XL): 35cm x 43cm. Produk ini memberikan kenyamanan dan gaya, cocok untuk aktivitas luar ruangan yang aktif. Jangan ragu menghubungi kami untuk pertanyaan atau pembelian. Terima kasih atas minat Anda pada produk kami!',
                'price' => 255000,
                'image' => 'product-distro/boardshort-barkerseven/img (1).jpg',
                'categories_id' => 1, // celana
            ],
            [
                'name' => 'Boardshort Barker Seven 02',
                'description' => 'Celana Pendek Barkerseven tersedia dalam ukuran (S/M/L/XL) yang dapat dipilih saat checkout. Ukuran berdasarkan lingkar pinggang dan panjangnya adalah sebagai berikut: Ukuran 28 (S): 32cm x 40cm, Ukuran 30 (M): 33cm x 41cm, Ukuran 32 (L): 34cm x 42cm, dan Ukuran 34 (XL): 35cm x 43cm. Produk ini memberikan kenyamanan dan gaya, cocok untuk aktivitas luar ruangan yang aktif. Jangan ragu menghubungi kami untuk pertanyaan atau pembelian. Terima kasih atas minat Anda pada produk kami!',
                'price' => 255000,
                'image' => 'product-distro/boardshort-barkerseven/img (1).jpg',
                'categories_id' => 1, // celana
            ],
            [
                'name' => 'Denim 01',
                'description' => 'Celana Jeans Denim hadir dalam berbagai ukuran (S/M/L/XL) yang dapat Anda pilih saat melakukan proses checkout. Detail ukuran meliputi lingkar pinggang dan panjang celana untuk masing-masing ukuran: S (34-52 cm, 42 cm), M (36-56 cm, 44 cm), L (40-60 cm, 46 cm), dan XL (42-66 cm, 49 cm). Celana ini terbuat dari bahan denim. Perlu diingat bahwa perbedaan metode pengukuran mungkin menyebabkan perbedaan ukuran sekitar 2-4 cm yang masih dianggap normal. Selain itu, ada kemungkinan sedikit perbedaan ukuran akibat perbedaan model, warna, dan efek cahaya saat foto diambil',
                'price' => 20499,
                'image' => 'product-distro/denim/img (1).jpg',
                'categories_id' => 1, // celana
            ],
            [
                'name' => 'Denim 02',
                'description' => 'Celana Jeans Denim hadir dalam berbagai ukuran (S/M/L/XL) yang dapat Anda pilih saat melakukan proses checkout. Detail ukuran meliputi lingkar pinggang dan panjang celana untuk masing-masing ukuran: S (34-52 cm, 42 cm), M (36-56 cm, 44 cm), L (40-60 cm, 46 cm), dan XL (42-66 cm, 49 cm). Celana ini terbuat dari bahan denim. Perlu diingat bahwa perbedaan metode pengukuran mungkin menyebabkan perbedaan ukuran sekitar 2-4 cm yang masih dianggap normal. Selain itu, ada kemungkinan sedikit perbedaan ukuran akibat perbedaan model, warna, dan efek cahaya saat foto diambil',
                'price' => 20499,
                'image' => 'product-distro/denim/img (2).jpg',
                'categories_id' => 1, // celana
            ],
            [
                'name' => 'Denim 03',
                'description' => 'Celana Jeans Denim hadir dalam berbagai ukuran (S/M/L/XL) yang dapat Anda pilih saat melakukan proses checkout. Detail ukuran meliputi lingkar pinggang dan panjang celana untuk masing-masing ukuran: S (34-52 cm, 42 cm), M (36-56 cm, 44 cm), L (40-60 cm, 46 cm), dan XL (42-66 cm, 49 cm). Celana ini terbuat dari bahan denim. Perlu diingat bahwa perbedaan metode pengukuran mungkin menyebabkan perbedaan ukuran sekitar 2-4 cm yang masih dianggap normal. Selain itu, ada kemungkinan sedikit perbedaan ukuran akibat perbedaan model, warna, dan efek cahaya saat foto diambil',
                'price' => 20499,
                'image' => 'product-distro/denim/img (3).jpg',
                'categories_id' => 1, // celana
            ],
            [
                'name' => 'Denim 04',
                'description' => 'Celana Jeans Denim hadir dalam berbagai ukuran (S/M/L/XL) yang dapat Anda pilih saat melakukan proses checkout. Detail ukuran meliputi lingkar pinggang dan panjang celana untuk masing-masing ukuran: S (34-52 cm, 42 cm), M (36-56 cm, 44 cm), L (40-60 cm, 46 cm), dan XL (42-66 cm, 49 cm). Celana ini terbuat dari bahan denim. Perlu diingat bahwa perbedaan metode pengukuran mungkin menyebabkan perbedaan ukuran sekitar 2-4 cm yang masih dianggap normal. Selain itu, ada kemungkinan sedikit perbedaan ukuran akibat perbedaan model, warna, dan efek cahaya saat foto diambil',
                'price' => 20499,
                'image' => 'product-distro/denim/img (4).jpg',
                'categories_id' => 1, // celana
            ],

            [
                'name' => 'Hoodie Harter Supply Co Beeani',
                'description' => 'Tampil kekinian dengan Hoodie Original Harter Supply Co Beeani, menawarkan gaya modern tanpa khawatir tentang harga mahal. Hoodie ini tersedia dalam ukuran L (Lebar Dada 55cm x Panjang 68cm) dan XL (Lebar Dada 58cm x Panjang 51cm) yang dapat dipilih saat checkout. Terbuat dari bahan fleece tebal yang nyaman, hoodie ini cocok untuk aktivitas sehari-hari dengan kenyamanan yang tetap terjaga. Foto produk yang ditampilkan adalah 100% asli, dan kualitas distro serta barang premium kami telah terjaga. Stok tersedia, silakan pesan sekarang dan berkontribusi dalam membantu kami terus berkembang. Terima kasih atas dukungan Anda, jangan ragu untuk menghubungi kami untuk pertanyaan atau pemesanan lebih lanjut. Semoga Anda menikmati produk kami!',
                'price' => 199000,
                'image' => 'product-distro/hoodie/img.jpg',
                'categories_id' => 2, // jaket
            ],
            [
                'name' => 'Ikat Pinggang 01',
                'description' => 'Tingkatkan penampilan Anda dengan Ikat Pinggang Barker Seven yang menggabungkan gaya dan kualitas dalam satu paket. Terbuat dari bahan strap nylon webbing yang kuat dan tahan lama, dengan gesper stainless steel anti deteksi. Desain simpel namun menarik, cocok untuk berbagai gaya dan tampilan. Panjang tali 120cm, dengan bahan kepala gesper stainless steel dan tali dari bahan canvas yang kuat. Dengan harga terjangkau hanya Rp64.700, Anda bisa memiliki ikat pinggang berkualitas tinggi yang menyempurnakan penampilan Anda. Tambahkan kepercayaan diri Anda dengan menggunakan Ikat Pinggang Barker Seven sebagai aksesori wajib dalam berbagai kesempatan. Pesanan Anda siap dikirim, jadi jangan ragu untuk pesan sekarang dan nikmati gaya serta kualitas luar biasa dari Barker Seven. Untuk pemesanan atau informasi lebih lanjut, hubungi kami. Terima kasih atas kepercayaan Anda pada produk kami!',
                'price' => 64700,
                'image' => 'product-distro/ikat-pinggang/img (1).jpg',
                'categories_id' => 3, // ikat pinggang
            ],
            [
                'name' => 'Ikat Pinggang 02',
                'description' => 'Tingkatkan penampilan Anda dengan Ikat Pinggang Barker Seven yang menggabungkan gaya dan kualitas dalam satu paket. Terbuat dari bahan strap nylon webbing yang kuat dan tahan lama, dengan gesper stainless steel anti deteksi. Desain simpel namun menarik, cocok untuk berbagai gaya dan tampilan. Panjang tali 120cm, dengan bahan kepala gesper stainless steel dan tali dari bahan canvas yang kuat. Dengan harga terjangkau hanya Rp64.700, Anda bisa memiliki ikat pinggang berkualitas tinggi yang menyempurnakan penampilan Anda. Tambahkan kepercayaan diri Anda dengan menggunakan Ikat Pinggang Barker Seven sebagai aksesori wajib dalam berbagai kesempatan. Pesanan Anda siap dikirim, jadi jangan ragu untuk pesan sekarang dan nikmati gaya serta kualitas luar biasa dari Barker Seven. Untuk pemesanan atau informasi lebih lanjut, hubungi kami. Terima kasih atas kepercayaan Anda pada produk kami!',
                'price' => 64700,
                'image' => 'product-distro/ikat-pinggang/img (2).jpg',
                'categories_id' => 3, // ikat pinggang
            ],
            [
                'name' => 'Jaket Coacth 01',
                'description' => 'Menghadirkan gaya dan kualitas dalam satu kesempatan, Jaket Coach Barker kini tersedia dalam ukuran M/L/XL dan warna hitam klasik. Dibuat dengan spesifikasi tinggi dan bahan berkualitas untuk kenyamanan Anda. Detail produk mencakup ukuran M/L/XL, harga IDR 370.000, warna hitam, sablon plastisol, dan bahan taslan semi waterproof untuk perlindungan terhadap cuaca. Ukuran dan spesifikasi terperinci juga disertakan. Desainnya yang klasik dan fungsional cocok untuk segala aktivitas dan cuaca. Kualitas menjadi prioritas dengan jaminan kualitas terbaik dan fungsionalitas yang memuaskan. Tampil stylish tanpa kompromi antara gaya dan kualitas dengan Jaket Coach Barker yang terjangkau. Untuk pemesanan atau informasi lebih lanjut, silakan hubungi kami. Terima kasih atas minat Anda pada produk kami.',
                'price' => 370000,
                'image' => 'product-distro/jaket-coach/img (1).jpg',
                'categories_id' => 2, // jaket
            ],
            [
                'name' => 'Jaket Coacth 02',
                'description' => 'Menghadirkan gaya dan kualitas dalam satu kesempatan, Jaket Coach Barker kini tersedia dalam ukuran M/L/XL dan warna hitam klasik. Dibuat dengan spesifikasi tinggi dan bahan berkualitas untuk kenyamanan Anda. Detail produk mencakup ukuran M/L/XL, harga IDR 370.000, warna hitam, sablon plastisol, dan bahan taslan semi waterproof untuk perlindungan terhadap cuaca. Ukuran dan spesifikasi terperinci juga disertakan. Desainnya yang klasik dan fungsional cocok untuk segala aktivitas dan cuaca. Kualitas menjadi prioritas dengan jaminan kualitas terbaik dan fungsionalitas yang memuaskan. Tampil stylish tanpa kompromi antara gaya dan kualitas dengan Jaket Coach Barker yang terjangkau. Untuk pemesanan atau informasi lebih lanjut, silakan hubungi kami. Terima kasih atas minat Anda pada produk kami.',
                'price' => 370000,
                'image' => 'product-distro/jaket-coach/img (2).jpg',
                'categories_id' => 2, // jaket
            ],
            [
                'name' => 'Kupluk',
                'description' => 'Tampil stylish dengan Kupluk Pria Beany Rap Unisex, sebuah aksesori fleksibel yang dapat berfungsi sebagai kupluk atau peci. Terbuat dari rajutan tebal dengan bahan premium berkualitas tinggi, memberikan kenyamanan optimal saat digunakan. Desain unisex cocok untuk pria dan wanita, dan bisa dikenakan sesuai selera sebagai kupluk atau peci. Ukuran onesize cocok untuk berbagai ukuran kepala. Kelebihannya termasuk desain fleksibel yang dapat dikreasikan sesuai gaya, bahan katun premium yang nyaman, dan kualitas premium yang tahan lama dan menarik. Pastikan stok tersedia sebelum membeli, dan jangan ragu untuk menghubungi kami untuk pemesanan atau informasi lebih lanjut. Terima kasih atas minat Anda pada produk kami. Jadikan Kupluk Pria Beany Rap Unisex sebagai aksesori keren dalam gaya Anda!',
                'price' => 40000,
                'image' => 'product-distro/kupluk/img.jpg',
                'categories_id' => 6, // topi
            ],
            [
                'name' => 'Kaos Longsleeve 01',
                'description' => 'Tampil keren dengan Longsleeve Barker Seven - Kaos Lengan Panjang Pria, kaos distro berkualitas tinggi yang menambah gaya Anda. Nikmati promo khusus dari BarkerSeven Store dan bandingkan kualitasnya. Kaos ini memiliki kualitas terbaik, bahan premium Cotton Combat 30s, dan sablon plastisol discharge yang menakjubkan. Tersedia dalam ukuran M, L, dan XL, dengan berbagai pilihan motif. Pengiriman setiap hari untuk memastikan Anda mendapatkan produk sesuai gambar. Terima kasih atas minat Anda pada produk kami.',
                'price' => 88000,
                'image' => 'product-distro/lengan-panjang/img (1).jpg',
                'categories_id' => 4, // kaos
            ],
            [
                'name' => 'Kaos Longsleeve 02',
                'description' => 'Tampil keren dengan Longsleeve Barker Seven - Kaos Lengan Panjang Pria, kaos distro berkualitas tinggi yang menambah gaya Anda. Nikmati promo khusus dari BarkerSeven Store dan bandingkan kualitasnya. Kaos ini memiliki kualitas terbaik, bahan premium Cotton Combat 30s, dan sablon plastisol discharge yang menakjubkan. Tersedia dalam ukuran M, L, dan XL, dengan berbagai pilihan motif. Pengiriman setiap hari untuk memastikan Anda mendapatkan produk sesuai gambar. Terima kasih atas minat Anda pada produk kami.',
                'price' => 88000,
                'image' => 'product-distro/lengan-panjang/img (2).jpg',
                'categories_id' => 4, // kaos
            ],
            [
                'name' => 'Kaos Longsleeve 03',
                'description' => 'Tampil keren dengan Longsleeve Barker Seven - Kaos Lengan Panjang Pria, kaos distro berkualitas tinggi yang menambah gaya Anda. Nikmati promo khusus dari BarkerSeven Store dan bandingkan kualitasnya. Kaos ini memiliki kualitas terbaik, bahan premium Cotton Combat 30s, dan sablon plastisol discharge yang menakjubkan. Tersedia dalam ukuran M, L, dan XL, dengan berbagai pilihan motif. Pengiriman setiap hari untuk memastikan Anda mendapatkan produk sesuai gambar. Terima kasih atas minat Anda pada produk kami.',
                'price' => 88000,
                'image' => 'product-distro/lengan-panjang/img (3).jpg',
                'categories_id' => 4, // kaos
            ],
            [
                'name' => 'Tas 01',
                'description' => 'Tas Ransel Backpack Outdoor Elbrus Texas 10L memberikan kenyamanan dan perlindungan saat petualangan luar ruangan. Dengan kapasitas 10L, desain outdoor, dan bonus raincover gratis, tas ini cocok untuk perjalanan pendek dan aktivitas luar ruangan. Dapatkan produk berkualitas dengan harga terjangkau dan pesan sekarang untuk perlindungan ekstra.',
                'price' => 74000,
                'image' => 'product-distro/tas/img (1).jpg',
                'categories_id' => 5, // tas
            ],
            [
                'name' => 'Tas 02',
                'description' => 'Tas Ransel Backpack Outdoor Elbrus Texas 10L memberikan kenyamanan dan perlindungan saat petualangan luar ruangan. Dengan kapasitas 10L, desain outdoor, dan bonus raincover gratis, tas ini cocok untuk perjalanan pendek dan aktivitas luar ruangan. Dapatkan produk berkualitas dengan harga terjangkau dan pesan sekarang untuk perlindungan ekstra.',
                'price' => 74000,
                'image' => 'product-distro/tas/img (2).jpg',
                'categories_id' => 5, // tas
            ],
            [
                'name' => 'Tas 03',
                'description' => 'Sementara itu, Tas Selempang Pria Elbrus Fiona menawarkan gaya trendi dan fungsionalitas tinggi. Terbuat dari Cordura Fabric yang tahan lama, tas ini memiliki desain kompak dengan kantong-kantong berzip berkualitas tinggi. Hanya dengan Rp45.000, Anda bisa tampil trendi tanpa merogoh kocek dalam-dalam. Pesan sekarang dan nikmati gaya dan fungsionalitas bersama Elbrus Fiona.',
                'price' => 74000,
                'image' => 'product-distro/tas/img selempang.jpg',
                'categories_id' => 5, // tas
            ],
            [
                'name' => 'T-Shirt Anamy 01',
                'description' => 'Baju berbahan semi katun dengan sablon Plastisol & Rubber ini memiliki berbagai ukuran, yaitu L dan XL, serta keistimewaan dalam bahan berkualitas dan desain sablon yang tahan lama. Ukuran L cocok untuk berat badan 40-55 kg, sementara ukuran XL cocok untuk berat badan 56-85 kg. Produk ini ditawarkan dengan harga terjangkau karena didapatkan langsung dari tangan pertama, dan cocok untuk dijual kembali. Anda dapat memesan dalam jumlah besar (partai besar) atau kecil (partai kecil) sesuai kebutuhan Anda. Terima kasih atas kepercayaan Anda, jangan ragu untuk menghubungi kami untuk pertanyaan lebih lanjut atau pemesanan.',
                'price' => 55000,
                'image' => 'product-distro/tshirt-anamy/img (1).jpg',
                'categories_id' => 4, // kaos
            ],
            [
                'name' => 'T-Shirt Anamy 02',
                'description' => 'Baju berbahan semi katun dengan sablon Plastisol & Rubber ini memiliki berbagai ukuran, yaitu L dan XL, serta keistimewaan dalam bahan berkualitas dan desain sablon yang tahan lama. Ukuran L cocok untuk berat badan 40-55 kg, sementara ukuran XL cocok untuk berat badan 56-85 kg. Produk ini ditawarkan dengan harga terjangkau karena didapatkan langsung dari tangan pertama, dan cocok untuk dijual kembali. Anda dapat memesan dalam jumlah besar (partai besar) atau kecil (partai kecil) sesuai kebutuhan Anda. Terima kasih atas kepercayaan Anda, jangan ragu untuk menghubungi kami untuk pertanyaan lebih lanjut atau pemesanan.',
                'price' => 55000,
                'image' => 'product-distro/tshirt-anamy/img (2).jpg',
                'categories_id' => 4, // kaos
            ],
            [
                'name' => 'T-Shirt Anamy 03',
                'description' => 'Baju berbahan semi katun dengan sablon Plastisol & Rubber ini memiliki berbagai ukuran, yaitu L dan XL, serta keistimewaan dalam bahan berkualitas dan desain sablon yang tahan lama. Ukuran L cocok untuk berat badan 40-55 kg, sementara ukuran XL cocok untuk berat badan 56-85 kg. Produk ini ditawarkan dengan harga terjangkau karena didapatkan langsung dari tangan pertama, dan cocok untuk dijual kembali. Anda dapat memesan dalam jumlah besar (partai besar) atau kecil (partai kecil) sesuai kebutuhan Anda. Terima kasih atas kepercayaan Anda, jangan ragu untuk menghubungi kami untuk pertanyaan lebih lanjut atau pemesanan.',
                'price' => 55000,
                'image' => 'product-distro/tshirt-anamy/img (3).jpg',
                'categories_id' => 4, // kaos
            ],
            [
                'name' => 'T-Shirt Anamy 04',
                'description' => 'Baju berbahan semi katun dengan sablon Plastisol & Rubber ini memiliki berbagai ukuran, yaitu L dan XL, serta keistimewaan dalam bahan berkualitas dan desain sablon yang tahan lama. Ukuran L cocok untuk berat badan 40-55 kg, sementara ukuran XL cocok untuk berat badan 56-85 kg. Produk ini ditawarkan dengan harga terjangkau karena didapatkan langsung dari tangan pertama, dan cocok untuk dijual kembali. Anda dapat memesan dalam jumlah besar (partai besar) atau kecil (partai kecil) sesuai kebutuhan Anda. Terima kasih atas kepercayaan Anda, jangan ragu untuk menghubungi kami untuk pertanyaan lebih lanjut atau pemesanan.',
                'price' => 55000,
                'image' => 'product-distro/tshirt-anamy/img (4).jpg',
                'categories_id' => 4, // kaos
            ],
        ];


        foreach ($products as $product) {
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
                'weigth' => rand(1, 5),
                'categories_id' => $product['categories_id'],
                'stok' => rand(1, 100)
            ]);
        }
    }
}
