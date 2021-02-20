<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ジム利用者 管理画面</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" 
              href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
              crossorigin="anonymous">

    </head>

    <body class="vh-100 d-flex justify-content-center text-center">
            <div class="w-75 mt-3">
                <div class="text-black-50 text-left border-bottom mt-5">
                    <strong>ジム利用者 管理画面</strong><br>
                    -従業員の皆様へ-<br>
                    当ジムの理念 "一人一人が常識ある行動を" で本日もどうぞ宜しくお願いします<br>
                    -本日の一言-<br>
                    "このままの世界で生きるのか？常識よりも、非常識を。"<br>
                    <br>
                </div>

                <div>
                 @yield('content')
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
    </body>
</html>
