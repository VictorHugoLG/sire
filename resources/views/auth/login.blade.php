<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <title>Sistema de Reserva - Login</title>

    {!! HTML::style('public/css/app.css') !!}

    <link rel="shortcut icon" href="{{ asset('public/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('public/favicon.ico') }}" type="image/x-icon">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition login-page skin-ufop guest">
<div class="login-box">
    <div class="login-logo">
        <i class="fa fa-calendar-check-o"></i> <b>Si</b>stema de <b>Re</b>serva de Salas e Equipamentos
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body ufop-border">
        <p class="login-box-msg">Faça o login para gerenciar suas reservas ou clique <a href="{{ route('recurso.select') }}"><strong>aqui</strong></a> apenas para visualizar o quadro de reservas.</p>

        <div class="form">
            <form class="form" action="{{ url('login') }}" method="post">
                {{ csrf_field() }}
                <div class="input-group @if($errors->has('email')) has-error @endif">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="email" name="email" class="form-control" placeholder="E-mail" required value="{{old('email')}}" data-toggle="tooltip" data-placement="right" title="E-mail cadastrado" autofocus>
                </div>

                <div class="input-group @if($errors->has('password')) has-error @endif">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" name="password" class="form-control" placeholder="Senha" required data-toggle="tooltip" data-placement="right" title="Senha">
                </div>

                <br />

                <div class="text-center">
                    <input id="remember-me" type="checkbox" name="remember-me" />
                    <label for="remember-me">Lembre-se de mim</label>
                </div>

                @if($errors->has('email') || $errors->has('password'))
                    @foreach($errors->all() as $error)
                        <h5 class="text-center text-danger"><b><i class="fa fa-exclamation-circle"></i> Erro <br/> {!! $error !!}</b></h5>
                    @endforeach
                @endif

                <br />
                <button type="submit" class="btn btn-ufop center-block btn-block"><i class="fa fa-sign-in"></i> Entrar</button>
            </form>
        </div>
    </div>
</div>

<br />

<footer class="text-center">
    <!-- Default to the left -->
    <strong>Copyleft <i class="fa fa-creative-commons"></i> {{ date("Y") }} <a href="{{ route('about.show') }}">João Pedro Santos de Moura</a></strong>.
</footer>

{!! HTML::script('public/js/app.js') !!}
{!! HTML::script('public/js/plugins/jQueryMask/jquery.mask.min.js') !!}
</body>
</html>
