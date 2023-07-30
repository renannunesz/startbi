<!DOCTYPE html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Start BI- Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/img/favicon/favicon.ico')?>">

</head>

<body>

    <section class="section">

        <div class="columns is-centered">
                <figure class="image is-128x128 ">
                    <img src="<?php echo base_url('assets/img/start_bi.png')?>">
                </figure>
        </div>

        <div class="container">
            <div class="columns is-centered">
                <div class="column is-4">
                    <div class="columns is-flex is-flex-direction-column">

                        <form class="box" action="<?php echo base_url('login/signIn') ?>" method="POST">
                            <div class="field">
                                <label class="label">Login:</label>
                                <input class="input" name="inputUsuario" type="text" placeholder="Usuário">
                            </div>
                            <div class="field">
                                <label class="label">Senha:</label>
                                <input class="input" name="inputSenha" type="password" placeholder="******">

                            </div>
                            <div class="column">
                                <button class="button is-link is-fullwidth" type="submit">Entrar</button>
                            </div>
                        </form>

                        <?php $msg = session()->getFlashdata('msg') ?>
                        <?php if (!empty($msg)) : ?>
                            <div class="notification is-danger is-light">
                                <?php echo $msg ?>
                            </div>
                        <?php endif ?>

                    </div>
                </div>
            </div>
        </div>

    </section>

</body>

</html>