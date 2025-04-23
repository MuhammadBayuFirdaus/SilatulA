<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Judul Berita</title>
    <link rel="stylesheet" href="{{ asset('css/berita.css') }}">
</head>
<body>
    @include('navbar')

    <main class="content">
        <h1 class="section-title">Judul Berita</h1>
        <article class="news-item">
            <img src="{{ asset('img/i2.png') }}" alt="Judul Berita" class="news-image">
            <p>Inazuma adalah sebuah negara pulau dalam dunia game Genshin Impact, 
                yang dikelilingi lautan dan dikenal dengan topan serta badainya. 
                Inazuma terdiri dari berbagai pulau, dan orang-orang di pulau-pulau 
                tersebut sangat bergantung pada kapal untuk berkomunikasi. Inazuma 
                memiliki ciri khas budaya Jepang, termasuk pakaian tradisional, 
                arsitektur kuil dan gerbang torii, serta kehadiran karakter 
                berelemen Electro. 
            </p>
            <h2>Berikut adalah beberapa detail lebih lanjut tentang Inazuma:</h2>
            <ul class="poin-berita">
                <li><b>Lokasi:</b> Inazuma terletak jauh di lautan, terdiri dari banyak pulau. </li>
                <li><b>Transportasi:</b> Kapal sangat penting untuk transportasi antara pulau-
                    pulau. </li>
                <li><b>Budaya:</b> Inazuma sangat dipengaruhi oleh budaya Jepang, termasuk 
                    pakaian tradisional, arsitektur kuil, dan gerbang torii. </li>
                <li><b>Karakter:</b> Beberapa karakter yang berasal dari Inazuma adalah 
                    Kamisato Ayaka, Kaedehara Kazuha, Yoimiya, Sayu, Raiden Shogun, 
                    Kujou Sara, Sangonomiya Kokomi, dan Thoma. </li>
                <li><b>Sejarah:</b> Pengenalan Inazuma di Genshin Impact memiliki dampak yang 
                    signifikan bagi para pemain yang menyukai budaya pop Jepang. 
                </li>
                <li><b>Tantangan:</b> Beberapa pemain mempertanyakan keakuratan penggambaran 
                    sejarah Jepang pada zaman Edo di dalam Inazuma, terutama mengenai 
                    pentingnya pertanian. </li>
            </ul>
        </article>
    </main>

    @include('footer')
</body>
</html>