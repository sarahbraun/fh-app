<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
        <title>FH Burgenland App Mockup</title>
        <link rel="stylesheet" href="_css/bootstrap.min.css">
        <link rel="stylesheet" href="_css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="_css/style.css" type="text/css">
    </head>
    <body>
        <div class="wrapper" id="dashboard">
            <?php include("_include/header.php"); ?>
            <div class="content wide">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th colspan="2">Heute, 17.10.2016</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>14:00 Uhr</td>
                            <td><a href="indoornavi.php">E.HG.004</a></td>
                        </tr>
                        <tr>
                            <td>COMMA-ALV</td>
                            <td>TeglasGe</td>
                        </tr>
                        <tr>
                            <td colspan="2" style="background:transparent url(_img/0eg-plan.svg) no-repeat center center scroll;background-size:cover;height:100px;"></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="height:40px;"></td>
                        </tr>
                        <tr>
                            <td>17:15 Uhr</td>
                            <td><a href="indoornavi.php">E.HG.209</a></td>
                        </tr>
                        <tr>
                            <td>SEMMA-ALV</td>
                            <td>RoitheMi</td>
                        </tr>
                        <tr>
                            <td colspan="2" style="background:transparent url(_img/2og-plan.svg) no-repeat center center scroll;background-size:cover;height:100px;"></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th colspan="2">Morgen, 18.10.2016</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>14:00 Uhr</td>
                            <td><a href="indoornavi.php">E.HG.004</a></td>
                        </tr>
                        <tr>
                            <td>COMMA-ALV</td>
                            <td>TeglasGe</td>
                        </tr>
                        <tr>
                            <td>17:15 Uhr</td>
                            <td><a href="indoornavi.php">E.HG.209</a></td>
                        </tr>
                        <tr>
                            <td>SEMMA-ALV</td>
                            <td>RoitheMi</td>
                        </tr>
                    </tbody>
                </table>
                <?php include("_include/footer.php"); ?>
            </div>
        </div>
        <script type="text/javascript" src="cordova.js"></script>
        <script src="_js/jquery-3.1.1.min.js"></script>
        <script src="_js/bootstrap.min.js"></script>
        <script src="_js/main.js"></script>
    </body>
</html>