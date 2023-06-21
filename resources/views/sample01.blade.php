<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>サーバーサイドスクリプト演習２</title>
</head>

<body>
    <h1>Bladeを使ったページの表⽰</h1>
    <p>{{ $message }}</p>

    @if (count($records) === 1)
        <p>1レコード</p>
    @elseif (count($records) > 1)
        <p>複数レコード</p>
    @else
        <p>レコードがありません</p>
    @endif

</body>

</html>
