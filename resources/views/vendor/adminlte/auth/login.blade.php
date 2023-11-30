@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> </title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <style>
            @font-face {
                font-family: myFirstFont;
                src: url("../../fonts/OLD.ttf");
            }
            img {
                display: block;
                max-height: 85px;
                width: auto;
                height: auto;
                padding-left: 8px;
            }
            .login-page {
                background-image: url('{{ asset('img/IMM_bg.jpg') }}');
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            .header{
                /* background-color: #022B61; */
                background-color: #002E97;
                padding: 10px;
            }
            .schoolname{
                font-family:"Times New Roman";
                font-size: 25pt; 
                color:white
            }
            .address{
                color:white
            }
            .schoolname2{
                font-family:"Times New Roman";
                font-size: 25pt;  
                color:#003147
            }
            .footer {
                position:fixed;
                bottom:0;
                width:100%;
                height:30px;
                background:#002E97;
                padding-top: 5px;
                z-index: 9999;
            }    
            .sis{
                text-align: right;

            }
            .sis #sisname{
                font-weight: bold; 
                color:white
            }

            body{background-color:#ff3300;}
        </style>
    </head>
    <body class="login-page">
        <div class="container-fluid header">    
            <div class="col-md-1 pull-left">
                <img class="logo" src="{{ asset('img/schd-logo-white.png') }}" alt="pcuLogo"/>
            </div>
            <div class="col-md-8"><span class="schoolname">Philippine Christian University Dasma Campus </span>
                <span class="address"><br>Sampaloc 1, City of Dasmariñas</span>
                <span class="address"><br>Cavite, Philippines</span>
            </div>
            {{-- <div class="col-md-3 sis"><span id="sisname">Scheduling System</span></div> --}}
        </div>
       
        <div class="login-box">
        <div id="app">
            <div class="login-box">
                <div class="login-logo">
                    <a style="color:black;" href="{{ url('/home') }}">
                        </i><b>LOG</b><b>IN</b>
                    </a>
                </div><!-- /.login-logo -->

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                <div class="login-box-body">
                    <p class="login-box-msg"> {{ trans('adminlte_lang::message.siginsession') }} </p>
                    <form action="{{ url('/login') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group has-feedback">
                            <input type="text" class="form-control" placeholder="{{ trans('adminlte_lang::message.email') }}" name="username"/>
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.password') }}" name="password"/>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-8">
                                <div class="checkbox icheck">
                                
                                    <input type="checkbox" name="remember"> {{ trans('adminlte_lang::message.remember') }}
                                    
                                </div>
                            </div><!-- /.col -->
                            <div class="col-xs-4">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('adminlte_lang::message.buttonsign') }}</button>
                            </div><!-- /.col -->
                        </div>
                    </form>

                    @include('adminlte::auth.partials.social_login')

                    <a href="{{ url('/password/reset') }}">
                        {{ trans('adminlte_lang::message.forgotpassword') }}
                    </a>
                    <br>
                    {{-- <a href="{{ url('/register') }}" class="text-center">
                        {{ trans('adminlte_lang::message.registermember') }}
                    </a> --}}

                </div><!-- /.login-box-body -->

            </div><!-- /.login-box -->
        </div>
        @include('adminlte::layouts.partials.scripts_auth')
            </div>
        
        
                <div class="container-fluid footer">

                <!-- To the right -->
                <div class="pull-right hidden-xs">
                    
                </div>
                <!-- Default to the left -->
            </div>  
        <script>
            $(function () {
                $('input').iCheck({ 
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
</body>

@endsection

