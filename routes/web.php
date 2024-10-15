<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page', 'name' => 'Denny Awang']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Posts Page', 'posts' => [
        [
            'id'        => 1,
            'slug'      => 'foto-terima-kasih-jokowi-dibentangkan-di-langit-mako-brimob-depok',
            'title'     => 'Foto Terima Kasih Jokowi Dibentangkan di Langit Mako Brimob Depok',
            'reporter'  => 'Daniel A. Fajri',
            'editor'    => 'Amirullah',
            'body'      => 'Tim terjun payung Polri membentangkan foto Presiden Jokowi di langit Mako Brimob, Kelapa Dua, Depok, Jawa Barat, pada Senin pagi, 14 Oktober 2024. Aksi ini menjadi bagian dalam rangkaian ‘Apel Kesiapan Pengamanan Pelantikan Presiden dan Wakil Presiden’. Momen tersebut terjadi saat para personel Polri melakukan aksi terjun payung atau skydiving. Sebelum membuka payung, penerjun itu bekerja sama untuk membentangkan foto Jokowi. Panji tersebut memperlihatkan foto Jokowi disertai ucapan terima kasih kepada pemimpin yang 10 tahun sudah menjabat sebagai presiden itu.',
            'link'      => '',
        ],
        [
            'id'        => 2,
            'slug'      => 'gus-ipul-baru-sebulan-menjabat-menteri-sosial-lanjut-ke-kabinet-prabowo',
            'title'     => 'Gus Ipul Baru Sebulan Menjabat Menteri Sosial, Lanjut ke Kabinet Prabowo?',
            'reporter'  => 'Putri Safira Pitaloka',
            'editor'    => 'S. Dian Andryanto',
            'body'      => 'Saifullah Yusuf atau yang lebih akrab disapa Gus Ipul baru sebulan menjabat sebagai Menteri Sosial. Namun, ia kini telah dipanggil oleh Presiden terpilih Prabowo Subianto ke kediamannya sebagai calon menteri. “Pada dasarnya, Pak Presiden Prabowo ingin segala program di Kementerian Sosial bisa tepat sasaran. Tidak salah sasaran, maka konsolidasi data itu amat sangat dibutuhkan,” ujar Gus Ipul, Senin, 14 Oktober 2024, dikutip dari Antara.',
            'link'      => 'https://nasional.tempo.co/read/1928595/gus-ipul-baru-sebulan-menjabat-menteri-sosial-lanjut-ke-kabinet-prabowo',
        ],
    ]]);
});

Route::get('/posts/{id}', function($slug) {
    $posts = [
        [
            'id'        => 1,
            'slug'      => 'foto-terima-kasih-jokowi-dibentangkan-di-langit-mako-brimob-depok',
            'title'     => 'Foto Terima Kasih Jokowi Dibentangkan di Langit Mako Brimob Depok',
            'reporter'  => 'Daniel A. Fajri',
            'editor'    => 'Amirullah',
            'body'      => 'Tim terjun payung Polri membentangkan foto Presiden Jokowi di langit Mako Brimob, Kelapa Dua, Depok, Jawa Barat, pada Senin pagi, 14 Oktober 2024. Aksi ini menjadi bagian dalam rangkaian ‘Apel Kesiapan Pengamanan Pelantikan Presiden dan Wakil Presiden’. Momen tersebut terjadi saat para personel Polri melakukan aksi terjun payung atau skydiving. Sebelum membuka payung, penerjun itu bekerja sama untuk membentangkan foto Jokowi. Panji tersebut memperlihatkan foto Jokowi disertai ucapan terima kasih kepada pemimpin yang 10 tahun sudah menjabat sebagai presiden itu.',
            'link'      => '',
        ],
        [
            'id'        => 2,
            'title'     => 'Gus Ipul Baru Sebulan Menjabat Menteri Sosial, Lanjut ke Kabinet Prabowo?',
            'slug'      => 'gus-ipul-baru-sebulan-menjabat-menteri-sosial-lanjut-ke-kabinet-prabowo',
            'reporter'  => 'Putri Safira Pitaloka',
            'editor'    => 'S. Dian Andryanto',
            'body'      => '
            Saifullah Yusuf atau yang lebih akrab disapa Gus Ipul baru sebulan menjabat sebagai Menteri Sosial. 
            Namun, ia kini telah dipanggil oleh Presiden terpilih Prabowo Subianto ke kediamannya sebagai calon menteri. 
            “Pada dasarnya, Pak Presiden Prabowo ingin segala program di Kementerian Sosial bisa tepat sasaran. 
            Tidak salah sasaran, maka konsolidasi data itu amat sangat dibutuhkan,” ujar Gus Ipul, Senin, 14 Oktober 2024, dikutip dari Antara.
            Saifullah Yusuf atau yang lebih akrab disapa Gus Ipul baru sebulan menjabat sebagai Menteri Sosial. Namun, ia kini telah dipanggil oleh Presiden terpilih Prabowo Subianto ke kediamannya sebagai calon menteri.
            “Pada dasarnya, Pak Presiden Prabowo ingin segala program di Kementerian Sosial bisa tepat sasaran. Tidak salah sasaran, maka konsolidasi data itu amat sangat dibutuhkan,” ujar Gus Ipul, Senin, 14 Oktober 2024, dikutip dari Antara.
            Sebelumnya, Gus Ipul dilantik oleh Presiden Joko Widodo dan menjabat sebagai Mensos untuk menggantikan Tri Rismaharini. Selama satu bulan ini, Gus Ipul telah berusaha menjalankan tugasnya meskipun dengan waktu yang singkat. Kini, dia dihadapkan pada kemungkinan untuk kembali menjabat di pos yang sama di bawah kepemimpinan Prabowo.
            “Siap saja. Pokoknya kita menghormati, menghargai, mengapresiasi, mendukung semua yang dibutuhkan oleh Pak Prabowo,” kata Gus Ipul, menanggapi pertanyaan mengenai kesiapannya membantu dalam kabinet baru.
            ',
            'link'      => 'https://nasional.tempo.co/read/1928595/gus-ipul-baru-sebulan-menjabat-menteri-sosial-lanjut-ke-kabinet-prabowo',
        ],
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', [
        'title' => 'Single Post',
        'post'  => $post,
    ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});