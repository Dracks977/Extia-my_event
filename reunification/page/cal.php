<?php

include('../php/config.php');



require_once("../activecalendar/source/activecalendar.php");
$cal = new activeCalendar();

try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8",$dbuser,$dbpass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed (check config.php):   " . $e->getMessage();
    }

    $result = $conn->prepare("SELECT * FROM Event");
		$result->execute();
		    while ($donnees = $result->fetch()){
      $date = strtotime($donnees['Darte']);
      $y = date('Y', $date);
      $m = date('m', $date);
      $d = date('d', $date);
      $h = date('H', $date);
      $i = date('i', $date);
	$cal->setEvent($y,$m,$d,$donnees['Libelle'],"article.php?id={$donnees['ID']}"); // create a class="event" and an <a href="this_page.php">
}

?> 
<?php print "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head><title>Active Calendar Class :: Example</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="activecalendar/data/css/plain.css" />
</head>
<body>
<center>
<?php print $cal->showMonth(); ?>
<br />
</center>
</body>
</html>