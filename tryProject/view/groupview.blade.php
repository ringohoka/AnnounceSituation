<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お知らせくん</title>
</head>

<body>
    @foreach ($group_lists as $g)
            {{-- @if ($a['name'] == {{$result}} || {{$result}} == '') --}}
                {{ $g['groupname'] }}
                <br>
            {{-- @endif --}}

            <a href="/groupview/{{$g->id}}/edit">編集</a>
        @endforeach
        <br><a href="/groupview/create">新規登録</a>

</body>

</html>
