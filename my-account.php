<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Minha Conta</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">Você está usando um navegador<strong>desatualizado</strong>. Por favor atualize para uma melhor experiência.</p>
            <![endif]-->

            <!-- Add your site or application content here -->
            <?php include 'header.php'; ?>
            <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 square-account">
                    <h3 class="text-center">Minha conta</h3>  
                    <form action=".php">          
                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input class="form-control" placeholder="seu@email.com.br" type="text" id="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Senha:</label>
                            <input type="password" class="form-control" id="pwd">
                        </div>
                        <div class="form-group">
                            <label for="pwd2">Repetir senha:</label>
                            <input type="password" class="form-control" id="pwd2">
                        </div>
                        <a href="index.php" class="btn btn-default" role="button">Cancelar</a>
                        <button type="submit" class="btn btn-default">Alterar dados</button>
                    </form>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
            <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
            <script src="js/plugins.js"></script>
            <script src="js/main.js"></script>

            <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
            <script>
                (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
                e=o.createElement(i);r=o.getElementsByTagName(i)[0];
                e.src='https://www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
                ga('create','UA-XXXXX-X','auto');ga('send','pageview');
            </script>
        </body>
        </html>
