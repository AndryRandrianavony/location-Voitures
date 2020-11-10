
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ChartJs-Modif</title>
<!-------------------------------------------------------------------------------------------------	-->
        <link rel="stylesheet" type="text/css" href="Chart.min.css"/>
       
        <script type="text/javascript" src="Chart.min.js"></script>
        <script type="text/javascript" src="jquery.js"></script>
        

<!-------------------------------------------------------------------------------------------------------->
</head>

<body>
	  <h1>ChartJs</h1>
	  <canvas id="monGraph" width="400" height="100">  </canvas>
	  <input type="text" id="daty" />
	 
      <script>
          var ctx = $("#monGraph");
          var graph = new Chart(ctx, {
              type: "bar",
              data: {
                  labels: ['Rouge', 'Bleu','Jaune'],
                  datasets: [{
                    label: "Nombre de votes",
                    data: [12,19,3]
                  }]
               }
          })
      </script>  
    
    
</body>
</html>
