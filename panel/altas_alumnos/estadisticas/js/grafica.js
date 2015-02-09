      google.load('visualization', '1.0', {'packages':['corechart']});
      google.setOnLoadCallback(drawChart);

      // var libros = JSON.parse(cadenaLibros);

      function drawChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');

        data.addRows([

          ['Mushrooms',2],
          ['Onions', 4],
          ['Olives', 1],
          ['Zucchini', 1],
          ['Pepperoni', 2],
          ['jovanny', 3]
        ]);


        var options = {'title':'GRAFICA DEL SISTEMA SICA',
                       'width':1020,
                       'height':450};

        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
