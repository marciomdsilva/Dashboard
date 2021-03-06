<!doctype html>
<html>
<head>
    <title>teste</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="<?php echo HOME_URL; ?>Includes/css/glyphicon.css" rel="stylesheet">
    <link href="<?php echo HOME_URL; ?>Includes/css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1d1280b1aa.js" crossorigin="anonymous"></script>
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
        <a class="navbar-brand" href="<?php echo HOME_URL; ?>index">DashBoard</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <!--------------------------------------------------------------------------------------------------------------------->
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo HOME_URL; ?>help">help <span class="sr-only">(current)</span></a>
                </li>
                <!--------------------------------------------------------------------------------------------------------------------->
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo HOME_URL; ?>error">Error <span class="sr-only">(current)</span></a>
                </li>
                <!--------------------------------------------------------------------------------------------------------------------->
<!--                <li class="nav-item active">-->
<!--                    <a class="nav-link" href="posts.html">Posts <span class="sr-only">(current)</span></a>-->
<!--                </li>-->
                <!--------------------------------------------------------------------------------------------------------------------->
<!--                <li class="nav-item active">-->
<!--                    <a class="nav-link" href="users.html">Users <span class="sr-only">(current)</span></a>-->
<!--                </li>-->
                <!--------------------------------------------------------------------------------------------------------------------->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="#">Link</a>-->
<!--                </li>-->
                <!--------------------------------------------------------------------------------------------------------------------->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>-->
<!--                </li>-->
                <!--------------------------------------------------------------------------------------------------------------------->
<!--                <li class="nav-item dropdown">-->
<!--                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"-->
<!--                       aria-haspopup="true" aria-expanded="false">Dropdown</a>-->
<!--                    <div class="dropdown-menu" aria-labelledby="dropdown01">-->
<!--                        <a class="dropdown-item" href="#">Action</a>-->
<!--                        <a class="dropdown-item" href="#">Another action</a>-->
<!--                        <a class="dropdown-item" href="#">Something else here</a>-->
<!--                    </div>-->
<!--                </li>-->
            <!--------------------------------------------------------------------------------------------------------------------->
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search for Client" aria-label="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search </button>
            </form>
            <!--------------------------------------------------------------------------------------------------------------------->
            <ul class="navbar-nav navbar-right">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Welcome, Márcio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <?php if (MainSession::get('loggedIn') == true) ?>
                    <a class="nav-link" href="<?php echo HOME_URL; ?>index/logout">Logout <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>





<div id="content">

    <!--    Aqui Fica toda a estrutura do site -->
    <!--    As tags que fecham o body e o div de content são fechadas dentro do footer.php-->