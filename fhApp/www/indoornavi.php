<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
        <title>FH Burgenland App Mockup</title>
        <link rel="stylesheet" href="_css/bootstrap.min.css">
        <link rel="stylesheet" href="_css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="_css/devices.min.css" type="text/css">
        <link rel="stylesheet" href="_css/style.css" type="text/css">
    </head>
    <body>
        <div class="wrapper">
            <?php include("_include/header.php"); ?>
            <div class="content">
                <h3>Raum-Suche</h3><br>
                <br>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="E.HG.209 ... ">
                    <a class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </a>
                </div>
            </div>
            <?php include("_include/footer.php"); ?>
        </div>
        <script type="text/javascript" src="cordova.js"></script>
        <script src="_js/jquery-3.1.1.min.js"></script>
        <script src="_js/bootstrap.min.js"></script>
        <script src="_js/main.js"></script>
    </body>
</html>