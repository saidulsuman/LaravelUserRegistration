<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>UserRegistrationHere</title>
        <link href="{{asset('admin/css/style.css')}}" rel='stylesheet' type='text/css' />
        <!--webfonts-->
        <link href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900" rel="stylesheet">
        <!--//webfonts-->

        <!-- Fonts -->


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            /*.flex-center {*/
                /*align-items: center;*/
                /*display: flex;*/
                /*justify-content: center;*/
            /*}*/

            .position-ref {
                position: relative;
            }

            .top-right {
                background-color: #fff;

                text-align:-moz-left;
                right: 10px;
                top: 18px;
            }

            .content {
                background-color: #1f6fb2;
                text-align: center;

            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('shows') }}">AdminLogin</a>

                        @if (Route::has('register'))
                            <a href="{{ route('user') }}">UserRegister</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                   Welcome To Home Page
                </div>

                {{--<div class="links">--}}
                    {{--<a href="https://laravel.com/docs">Docs</a>--}}
                    {{--<a href="https://laracasts.com">Laracasts</a>--}}
                    {{--<a href="https://laravel-news.com">News</a>--}}
                    {{--<a href="https://blog.laravel.com">Blog</a>--}}
                    {{--<a href="https://nova.laravel.com">Nova</a>--}}
                    {{--<a href="https://forge.laravel.com">Forge</a>--}}
                    {{--<a href="https://github.com/laravel/laravel">GitHub</a>--}}
                {{--</div>--}}
            </div>
        </div>
    </body>
</html>
