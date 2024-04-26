<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ユーザー登録完了画面</title>
</head>
<body>
    <h1>ユーザー登録完了画面</h1>
    @if ($errors->any())  
        <ul>  
            @foreach ($errors->all() as $error)  
                <li>{{ $error }}</li>  
            @endforeach  
        </ul>  
    @endif  
    <span>ユーザー登録が完了しました。</span>
    <a href="http://localhost:8081/kensyu/public/login_kensyu">ログイン画面へ戻る</a>
</body>
</html>