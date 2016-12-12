<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sarah Astar</title>
    <link rel="stylesheet" href="css/toms-astar.css">
</head>
<body>
   Raum aus der Liste aussuchen:
    <?php
    $handle = fopen("raumliste.csv", "r");
    echo '<select name="endpoint" id="endpoint" onchange="searchEndpoint(this.value)">';
    if ($handle !== FALSE) {
        $row = 2;
        while ( ($data = fgetcsv($handle, 133, ",")) !== FALSE ) {
            printf('<option value="%s,%s">E.HG.%s %s</option>', $data[1], $data[2], $data[0], $data[3]);
        }
        fclose($handle);
    }
    echo "</select>";
    ?>
    <br>
    oder suchen: 
    <input type="text" name="raumfinder" id="raumfinder" />
    <br><br>
    <div class="map" id="mainMap">
       <img src="img/eg.svg" alt="eg" class="base">
       <!-- <img src="img/eg-grid.svg" alt="eg grid" class="grid">  -->
    </div>
    <script type='text/javascript' src='js/jquery-1.7.1.min.js'></script>
	<script type='text/javascript' src='js/astar.js'></script>
	<script src="js/EG.js"></script>
	<script src="js/map-search.js"></script>
</body>
</html>