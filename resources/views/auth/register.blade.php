<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register - Ideias.com</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset("images/icons/favicon.ico") }}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset("vendor/bootstrap/css/bootstrap.min.css") }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset("fonts/font-awesome-4.7.0/css/font-awesome.min.css") }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset("fonts/iconic/css/material-design-iconic-font.min.css") }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset("vendor/animate/animate.css") }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset("vendor/css-hamburgers/hamburgers.min.css") }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset("vendor/animsition/css/animsition.min.css") }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset("vendor/select2/select2.min.css") }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset("vendor/daterangepicker/daterangepicker.css") }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset("css/util.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("css/main.css") }}">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('{{ asset("images/bg-01.jpg") }}');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form class="login100-form validate-form" action="{{ route('register') }}" method="post">
                @csrf
					<span class="login100-form-title p-b-49">
						Registrar-se
                    </span>
                    
                <div class="wrap-input100 validate-input m-b-23" data-validate = "Crie um username!">
                    <span class="label-input100">Username</span>
                    <input class="input100" type="text" name="username" id="username" placeholder="Crie um username">
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-23" data-validate = "Ops, precisamos de um e-mail!">
                    <span class="label-input100">E-mail</span>
                    <input class="input100" type="email" name="email" id="email" placeholder="Insira seu e-mail">
                    <span class="focus-input100" data-symbol="&#xf159;"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-23" data-validate="Que tal uma senha?">
                    <span class="label-input100">Senha</span>
                    <input class="input100" type="password" name="password" id="password" placeholder="Insira uma senha">
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                </div>

                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Aniversário</span>
                    <input class="input100" type="date" name="birth" id="birth" placeholder="Type your password">
                    <span class="focus-input100" data-symbol="&#xf122;"></span>
                </div>

                <div class="text-right p-t-8 p-b-31">
                    
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" type="submit">
                            Concluir
                        </button>
                    </div>
                </div>

                <div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Or Sign Up Using
						</span>
                </div>

                <div class="flex-c-m">
                    <a href="#" class="login100-social-item bg1">
                        <i class="fa fa-facebook"></i>
                    </a>

                    <a href="#" class="login100-social-item bg2">
                        <i class="fa fa-twitter"></i>
                    </a>

                    <a href="#" class="login100-social-item bg3">
                        <i class="fa fa-google"></i>
                    </a>
                </div>

                <div class="flex-col-c p-t-155">
                    <a href="{{ route('login') }}" class="txt2">
                        Or Login
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="{{ asset("vendor/jquery/jquery-3.2.1.min.js") }}"></script>
<!--===============================================================================================-->
<script src="{{ asset("vendor/animsition/js/animsition.min.js") }}"></script>
<!--===============================================================================================-->
<script src="{{ asset("vendor/bootstrap/js/popper.js") }}"></script>
<script src="{{ asset("vendor/bootstrap/js/bootstrap.min.js") }}"></script>
<!--===============================================================================================-->
<script src="{{ asset("vendor/select2/select2.min.js") }}"></script>
<!--===============================================================================================-->
<script src="{{ asset("vendor/daterangepicker/moment.min.js") }}"></script>
<script src="{{ asset("vendor/daterangepicker/daterangepicker.js") }}"></script>
<!--===============================================================================================-->
<script src="{{ asset("vendor/countdowntime/countdowntime.js") }}"></script>
<!--===============================================================================================-->
<script src="{{ asset("js/main.js") }}"></script>

</body>
</html>