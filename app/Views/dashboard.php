<!DOCTYPE html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Start BI- Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/img/favicon/favicon.ico')?>">

</head>

<body>

<nav class="navbar is-light has-shadow" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="#">
            <img src="<?php echo base_url('assets/img/start_bi_logo.png')?>" width="112" height="50">
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <section class="navbar-item">
                <h3 class="title is-4 is-spaced"><?php echo "Bem Vindo(a) " . session()->nome;?> </h1>
                <p> 
                    <?php
                        //echo "Aqui" . session()->Mobile;
                        //dd(session()->Mobile); width="1600" height="800"
                    ?>
                </p>
            </section>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a class="button is-link" href="<?php echo base_url('login/signOut') ?>">
                        Sair
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

    <div class="columns is-centered">
        <div class="block">

            <div class="box">

                <iframe title="" width="1600" height="800" src="<?php echo session()->link;?>" frameborder="0" allowFullScreen="true"></iframe>

            </div>
        </div>
    </div>

</body>

</html>