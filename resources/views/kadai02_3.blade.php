<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>kadai02_3 - サーバーサイドスクリプト演習２</title>
</head>

<body>
    <h1>kadai02 Bladeを使ったページの表⽰</h1>
    <h2>コントローラーからビューへデータを送る</h2>
    <section>
        @foreach ($courses as $cours)
            <h3>{{ $cours['name'] }}</h3>
            <p>{{ $cours['note'] }}</p>
            <a href={{ $cours['url'] }} target="kadai02_3">コースの紹介</a>
        @endforeach
    </section>

</body>

</html>
