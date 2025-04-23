<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News Website</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    
    @include('navbar')

    <main class="content">
        <section class="news">
            <article class="news-item">
                <h2>Breaking News</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#read-more">Read more...</a></p>
            </article>
            <article class="news-item">
                <h2>Technology Update</h2>
                <p>Latest trends in AI and machine learning. <a href="#read-more">Read more...</a></p>
            </article>
        </section>
    </main>

    @include('footer')

</body>
</html>