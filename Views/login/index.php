<body>
<!--    video-->
<video id="videoBG" poster="poster.JPG" autoplay muted loop>
    <source src="<?php echo HOME_URL; ?>Includes/video/waves.mp4">
</video>

<!--<div class="embed-responsive embed-responsive-16by9">-->
<!--    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Yypnp_-DAuM?rel=0&autoplay=1&mute=1&showinfo=0&controls=0&loop=1&autopause=0" allow="autoplay"></iframe>-->
<!--</div>-->

<!--<div class="video-background">-->
<!--    <div class="video-foreground">-->
<!--        <iframe src="https://www.youtube.com/embed/Yypnp_-DAuM?version=3&controls=0&showinfo=0&rel=0&autoplay=1&loop=1&mute=1"-->
<!--                frameborder="0" allowfullscreen allow="autoplay"></iframe>-->
<!--    </div>-->
<!--</div>-->

<div class="container-fluid bg-login">
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <!--form start-->
            <form class="form-container" action="login/run" method="post">
                <h1>DashBoard</h1>
                <!--Email-->
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><span class="glyphicon glyphicon-user"
                                                                aria-hidden="true"></span></div>
                        </div>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                               placeholder="Enter email" name="login">
                    </div>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
                <!--Password-->
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><span class="glyphicon glyphicon-lock"
                                                                aria-hidden="true"></span></div>
                        </div>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                    </div>
                </div>
                <!--Botão-->
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
            <!--form End-->
        </div>
        <div class="col"></div>
    </div>
    <!-- Este div fecha o div de content iniciado no header-->
</div>