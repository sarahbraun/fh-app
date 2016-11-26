$(function() {
    var running = false;
    $("#runall").click(function() {
        if (running) {
            return;
        }
        running = true;

        var graph = new Graph(grid),
            start = graph.grid[15][0],
            end = graph.grid[10][18],
            results = [],
            times = 0;


        result = astar.search(graph, start, end),

        $("#graph").html(result.toString());

        $("#results").html(results.join(''));

        running = false;
        return false;
    });
});