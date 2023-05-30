<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'title' => 'Filosofi Teras',
            'writer' => 'Henry Manampiring',
            'publisher' => 'Gramedia',
            'category' => 'Literatur',
            'isbn' => '123-121-244-23',
            'synopsis' => 'Filosofi Teras, diawali dengan menceritakan tentang sebuah survei kekhawatiran nasional yang semakin masif sekaligus menyajikan tentang sekilas kehidupan si penulis yang dipenuhi oleh emosi negatif yang berlebihan. Dalam buku ini dijelaskan bahwa penyebab emosi negatif atau kecemasan yang berlebihan disebabkan oleh rasio atau pola pikir yang keliru. Pada akhirnya, penulis menyarankan para pembaca untuk memperbaiki pola pikir yang keliru tersebut, dengan salah satu contohnya ialah menerapkan filsafat Stoa (Stoikisme) yang pada buku tersebut kemudian diterjemahkan sebagai "Filsafat Teras" dalam kehidupan sehari-hari. Dalam buku tersebut, filsafat Stoa digambarkan secara sederhana dengan inti dikotomi kendali nasib manusia, sehingga dari dikotomi kendali tersebut, manusia dapat menentukan hal-hal yang dapat membuatnya bahagia maupun tidak.',
            'cover' => '1673926751.jpg',
            'popularity' => 10,
            'contentBook' => '16740551991982384962.pdf'
        ]);

        Book::create([
            'title' => 'Menghilang, Menemukan Diri Sejati',
            'writer' => 'Fahruddin Faiz',
            'publisher' => 'Naura Books',
            'category' => 'Literatur',
            'isbn' => '123-121-244-23',
            'synopsis' => 'Filosofi Teras, diawali dengan menceritakan tentang sebuah survei kekhawatiran nasional yang semakin masif sekaligus menyajikan tentang sekilas kehidupan si penulis yang dipenuhi oleh emosi negatif yang berlebihan. Dalam buku ini dijelaskan bahwa penyebab emosi negatif atau kecemasan yang berlebihan disebabkan oleh rasio atau pola pikir yang keliru. Pada akhirnya, penulis menyarankan para pembaca untuk memperbaiki pola pikir yang keliru tersebut, dengan salah satu contohnya ialah menerapkan filsafat Stoa (Stoikisme) yang pada buku tersebut kemudian diterjemahkan sebagai "Filsafat Teras" dalam kehidupan sehari-hari. Dalam buku tersebut, filsafat Stoa digambarkan secara sederhana dengan inti dikotomi kendali nasib manusia, sehingga dari dikotomi kendali tersebut, manusia dapat menentukan hal-hal yang dapat membuatnya bahagia maupun tidak.',
            'cover' => '1673928895.jpg',
            'popularity' => 2,
            'contentBook' => '16740551991982384962.pdf'
        ]);

        Book::create([
            'title' => 'Meditasi',
            'writer' => 'Marcus Aurelius',
            'publisher' => 'Gramedia',
            'category' => 'Literatur',
            'isbn' => '123-121-244-23',
            'synopsis' => 'Meditasi disusun dari tahun 161 hingga 180 M. Buku ini adalah salah satu karya terbaik mengenai filsafat Stoisisme.
            Ditulis dalam bahasa Yunani oleh satu-satunya kaisar Romawi yang juga seorang filsuf, Meditasi menawarkan serangkaian refleksi dan latihan spiritual menantang yang dikembangkan ketika Marcus Aureluis berjuang untuk memahami dirinya sendiri dan alam semesta.
            Dalam buku ini Marcus memandang filsafat adalah terapi jiwa dan ia mempraktikkan beragam terapi itu pada jiwanya. Dengan begini, Meditasi adalah obat bagi dirinya. Meski ditulis dalam literatur klasik, buku ini tetap sangat menarik dan relevan dengan dunia modern.
            Pengantar
            Buku dengan tema filsafat stoisisme ini ditulis oleh Marcus Aureluis Antonius, yang lahir pada 121 Masehi, pada masa pemerintahan Kaisar Hadrian. Mulanya ia bernama Marcus Annius Verus, tetapi ayahnya yang seorang bangsawan mati muda dan Marcus pun diadopsi. Ia diadopsi pertama kali oleh kakeknya, yang mendidiknya dengan sejumlah tutor hebat. Kemudian, saat berusia enam belas tahun, ia diadopsi oleh pamannya, Aurelius Antoninus, yang tidak memiliki putra yang masih hidup dan telah disetujui sebagai pewaris Hadrian. Aurelius Antoninus mengubah nama Marcus menjadi namanya dan mempertunangkannya dengan putrinya, Faustina. Faustina melahirkan empat belas anak, tetapi tidak satu pun putranya yang hidup lebih lama dari Marcus, kecuali Commodus yang tak berguna, yang akhirnya meneruskan Marcus sebagai kaisar.',
            'cover' => 'banner_img_01.jpg',
            'popularity' => 8,
            'contentBook' => '16740551991982384962.pdf'
        ]);
    }
}
