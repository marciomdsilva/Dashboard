<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="<?php echo HOME_URL; ?>Includes/css/glyphicon.css" rel="stylesheet">
    <link href="<?php echo HOME_URL; ?>Includes/css/style.css" rel="stylesheet">

    <!--CSS que só se aplica a esta pagina-->
    <style type="text/css">
        .bg-login {
            /*background: url("img/loginbackground.jpg") no-repeat;*/
            width: 100%;
            height: 100vh;
        }

        #videoBG {
            position: fixed;
            z-index: -1;
        }

        @media (min-aspect-ratio: 16/9) {
            #videoBG {
                width: 100%;
                height: auto;
            }
        }
        @media (max-aspect-ratio: 16/9) {
            #videoBG {
                width:auto;
                height: 100%;
            }
        }
        @media (max-width: 767px) {
            #videoBG {
                display: none;
            }
            body {
                background: url("<?php echo HOME_URL; ?>Includes/img/waves.png") no-repeat;
                background-size: cover;
            }
        }

        .form-container {
            /*background: linear-gradient(rgba(255,255,255,.5), rgba(255,255,255,.5)), url("../img/loginbackgroundtransparent.png") no-repeat;*/
            background: url("<?php echo HOME_URL; ?>Includes/img/loginbackgroundtransparent.png") no-repeat;
            /*background-color: #fff;*/
            /*border: 1px solid #ffffff;*/
            padding: 50px 60px;
            /*margin-top: 20vh;*/

            /*Centrar ao topo do ecrã*/
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

            /*Bordas*/
            border-radius: 30px 30px 30px 30px;
            -moz-border-radius: 30px 30px 30px 30px;
            -webkit-border-radius: 30px 30px 30px 30px;
            border: 0px solid #000000;

            /*Sombra*/
            -webkit-box-shadow: 1px 4px 15px 1px rgba(0,0,0,0.75);
            -moz-box-shadow: 1px 4px 15px 1px rgba(0,0,0,0.75);
            box-shadow: 1px 4px 15px 1px rgba(0,0,0,0.75);
        }
    </style>

</head>
<body>
<!--    video-->
<video id="videoBG" poster="poster.JPG" autoplay muted loop>
    <source src="<?php echo HOME_URL; ?>Includes/video/waves.mp4">
</video>

<div class="container-fluid bg-login">
    <!--    Aqui Fica toda a estrutura do site -->
    <!--    As tags que fecham o body e o div de content são fechadas dentro do footer.php-->