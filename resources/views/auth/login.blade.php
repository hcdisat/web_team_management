<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/materialize.css') }}" rel="stylesheet">
        <style>
            body{
                background:#e0e0e0;

                overflow:hidden;
            }
            .cont-login{
                display:flex;
                justify-content:center;
                align-items:center;

                height:100vh;
            }

            .block-login{
                width:350px;
                background:#fff;
                padding:20px;
                border-radius:10px;
            }
            .input-field{
                margin:0px;
            }
            .checkbox{
                padding:10px 0px;
            }

            .cont-options{
                padding:10px 0px;
            }
            
        </style>
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col s12 cont-login">
                    <div class="block-login">
                        <h4 class="center">  Login   </h4>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="row">
                                    <div class="input-field{{ $errors->has('email') ? ' has-error' : '' }} col s12">
                                        
                                        <input id="email" class="validate" type="email" name="email" value="{{ old('email') }}" required>
                                        <label for="email">Email</label>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="input-field{{ $errors->has('password') ? ' has-error' : '' }} col s12">
                                        
                                        <input id="password" type="password" class="validate" type="password" name="password" required>
                                        <label for="password">Password</label>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>



                                    <div class="input-field col s12">
                                        <div class="checkbox">
                                                <input type="checkbox" id="test5" />
                                                <label for="test5">Recordar mi cuenta</label>                                         
                                        </div>
                                    </div>

                                    <div class="input-field col s12">
                                        <div class="cont-options">
                                            <button type="submit" class="col s12 waves-effect waves-light grey darken-4 btn">
                                                Login
                                            </button>

                                            <a class="col s12 center" style="margin-top:10px;" href="{{ route('password.request') }}">
                                                Olvidaste tu Password?
                                            </a>
                                        </div>
                                    </div>


                                </div>



                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/materialize.js') }}"></script>
  </body>
</html>
