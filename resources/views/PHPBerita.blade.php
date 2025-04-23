<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $berita->title }}</title>
    <link rel="stylesheet" href="{{ asset('css/berita.css') }}">
</head>
<body>
    @include('navbar')

    <main class="content">
        <h1 class="section-title">{{ $berita->title }}</h1>
        <article class="news-item">
            <img src="{{ asset('images/' . $berita->image) }}" alt="{{ $berita->title }}" class="news-image">
            <p>{{ $berita->content }}</p>
        </article>
    </main>

    @include('footer')
</body>
</html>