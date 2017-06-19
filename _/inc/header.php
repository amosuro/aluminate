		<!--[if IE]>
	<script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js"></script>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChartLocations);
       google.setOnLoadCallback(drawChartOccupations);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChartLocations() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Alumni Locations');
        data.addColumn('number', 'Number of Alumni');
        data.addRows([
          ['London', 400],
          ['Essex', 200],
          ['Coventry', 140],
          ['Cambridge', 150],
          ['Oxford', 100]
        ]);

        // Set chart options
        var options = {'width':325,
        			   'height':210,
                       'backgroundColor': 'transparent'
                       };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('ang-locationsChart'));
        chart.draw(data, options);
      }
      
      function drawChartOccupations() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Architect');
        data.addColumn('number', 'Architect');
        data.addColumn('number', 'Systems Developer');
        data.addColumn('number', 'Teacher');
        data.addColumn('number', 'Lawyer');
        data.addRows([
          ['Jan', 1000, 400, 1200, 800],
          ['Feb', 900, 600, 700, 500],
          ['Mar', 700, 300, 200, 1000],
          ['Apr', 1200, 500, 300, 500]
        ]);

        var options = {
          hAxis: {title: 'Month'}, backgroundColor: 'transparent','width':655, 'height':300
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('ang-occupationsChart'));
        chart.draw(data, options);
      }
    </script>
    <script src="https://www.google.com/uds/?file=visualization&amp;v=1.0&amp;packages=corechart" type="text/javascript"></script><script src="https://www.google.com/uds/api/visualization/1.0/31f9974bf1146091ae320c1219fdf695/format+en_GB,default,corechart.I.js" type="text/javascript"></script>
    <script type="text/javascript" src="../_/js/functions.js"></script>
	<script type="text/javascript" src="../_/js/jquery.fancybox-1.3.4.pack.js"></script>
    <script type="text/javascript" src="../_/js/jquery.easing-1.3.pack.js"></script>
    <script type="text/javascript" src="../_/js/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="../_/js/jcarousel.js"></script>
    <script type="text/javascript">
    	function goToByScroll(id){
	     	$('html,body').animate({
	     		scrollTop: $("#"+id).offset().top},'slow'
	     	);
	     	$("#"+id).effect("highlight", {}, 2000);
		};
    </script>
    <script type="text/javascript" src="../_/js/stylesheetToggle.js"></script>
	<link rel="stylesheet" type="text/css" href="../_/stylesheets/css/layout.css">
    <link rel="stylesheet" type="text/css" title="Default Skin" href="../_/stylesheets/css/skin-blue.css">
    <link rel="shortcut icon" href="../_/img/favicon.ico">	 
	<link rel="apple-touch-icon" href="../_/img/apple-touch-icon.png">