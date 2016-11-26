(function(){
    'use strict';
    // Das Erdgeschoss wurde bereits in der index.html eingebunden
    var graphEG = new Graph(gridEG);
    var mainMap = document.getElementById('mainMap');
    var rows = gridEG.length;
    var cols = gridEG[0].length;

    /*
        Speichert die erstellten Elemente, es kann über die gefundenen Koordinaten
        auf sie zugegriffen werden. z. B.: gridElems[y][x].style.backgroundColor = 'red';
    */
    var gridElems = [];

    // vorläufiger Container für die zu erstellenden HTML-Elemente
    var docFrag = document.createDocumentFragment();

    // Raster Elemente für begehbare Bereiche erzeugen
    for (var i = 0; i < rows; i++) {
        var row = [];
        for (var j = 0; j < cols; j++) {
            // ignoriere nicht begehbare Bereiche
            if (gridEG[i][j] === 0) continue;
            // Element erzeugen und Attribute setzen
            var elem = document.createElement('div');
            elem.className = 'grid-box';
            elem.style.left = 100/cols * j + '%';
            elem.style.top = 100/rows * i + '%';
            elem.title = i + ', ' + j;
            //
            docFrag.appendChild(elem);
            row[j] = elem;
        }
        // Elemente für späteren Zugriff speichern
        gridElems[i] = row;
    }

    mainMap.appendChild(docFrag);

    // astar anwenden
    // Start beim Eingang ACHTUNG: zuerst wird die Zeile angegeben, dann die Spalte!!!!
    var startY = 16;
    var startX = 0;
    var endY = 8;// E.HG.014
    var endX = 16;

    var start = graphEG.grid[startY][startX];

    var end = graphEG.grid[endY][endX];

    var result = astar.search(graphEG, start, end);

    // Ergebnisse anzeigen, Endpunkt weglassen (length - 1). Der wird danach extra gestaltet
    for (i = 0; i < result.length - 1; i++) {
        // Style für jeden gefundenen Wegpunkt hinzufügen
        gridElems[ result[i].x ][ result[i].y ].classList.add('waypoint', 'path');
    }

    // Start- und Endpunkt zeigen:
    gridElems[startY][startX].classList.add('waypoint', 'start');
    gridElems[endY][endX].classList.add('waypoint', 'end');
}());