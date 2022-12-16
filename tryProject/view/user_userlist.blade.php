<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お知らせくん</title>
    <link rel="stylesheet" href="css/css_userlist.css">

</head>

<body>
    <div id="div1">

        <p class="groupname">
            {{-- @foreach($accounts as $a)
                {{$a['groups']['groupid']}}
            @endforeach --}}

                グループ名

        </p>
        <form id="form2" action="/urer_userlist" method="POST">
            @csrf
            <input id="sbox2" id="s" name="s" type="text" placeholder="ユーザ名を入力" />
            <button type="submit" id="sbtn2"><i class="fas fa-search"></i></button><br>
        </form>

        @foreach ($accounts as $a)
            {{-- @if ($a['name'] == {{$result}} || {{$result}} == '') --}}
                {{ $a['name'] }}
                {{ $a['mail'] }}
                {{ $a['situation'] }}
                <br>
            {{-- @endif --}}

            <a href="/user_userlist/{{$a->id}}/edit">編集</a>
        @endforeach
        <br><a href="/user_userlist/create">新規登録</a>
        <div>

            <script src="https://kit.fontawesome.com/841b98f2a1.js" crossorigin="anonymous"></script>
        </div>
    </div>

</body>

</html>
