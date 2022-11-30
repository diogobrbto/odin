<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow,nosnippet,noodp,noarchive,noimageindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Odin - Gerenciador de Estoque</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body class="background_login">
    <div id="container_login" name="container_login" class="container_login">
        <form name="form_login" id="form_login" class="form_login" method="post" action="{{route('login')}}">
            @csrf
            <div id="login_div" name="login_div" class="login_div">
                <input type="text" id="user_form" name="user_form" class="user_form" value="USER" onfocus="if(this.value == 'USER')this.value = ''" onblur="if(this.value == '')this.value = 'USER'">
            </div>
            <div id="password_div" name="password_div" class="password_div">
                <input type="password" id="pass_form" name="pass_form" class="pass_form" value="password" onfocus="if(this.value == 'password')this.value = ''" onblur="if(this.value == '')this.value = 'password'">
            </div>
            <div id="botão_login_div" name="botão_login_div" class="botão_login_div">
                <input type="submit" id="submit_form" name="submit_form" class="submit_form" value="Login">
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
    </div>
</body>
</html>