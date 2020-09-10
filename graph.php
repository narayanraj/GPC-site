 <?php


 require_once('\xampp\php\pear\src\jpgraph.php');
 require_once('\xampp\php\pear\src\jpgraph_line.php'); 
 //  data
$ydata = array(90,80,67,87,66,71,96,53,35,73);



// Create the graph. These two calls are always required
$graph = new Graph(300,250);
$graph->SetScale('textlin');
$graph->xaxis->title->Set("Number of students");
$graph->yaxis->title->Set("Marks");
// Create the linear plot
$lineplot=new LinePlot($ydata);
$lineplot->SetColor('blue');

// Add the plot to the graph
$graph->Add($lineplot);

// Display the graph
$graph->Stroke();

?>