
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Welcome to James Buchanan Pub and Restaurant</title>
<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
<link rel="icon" type="image/png" href="xres/images/favicon.png" />
<link type="text/css" href="css/styles.css" rel="stylesheet" media="all" />
</head>

<body>
<div id="wrapper">
	<div id="header">
    <h1><a href="index.php"><img src="xres/images/logo.png" class="logo" alt="James Buchanan Pub and Restaurant" /></a></h1></br></br>
      
	</div>
    <div id="content">
    	<div id="gallerycontainer">
			<div class="portfolio-area" style="margin:0 auto; padding:140px 20px 20px 20px; width:820px;">	

<a style="color:red","align:center";>Print and present this details upon boarding the bus</a><br><br>
<a href="javascript:Clickheretoprint()"style="color:red";>Print</a>
<div id="print_content" style="width: 900px;">
<strong>Ticket Reservation Details</strong><br><br>
<?php
include('db.php');
$id=$_GET['id'];
$setnum=$_GET['setnum'];
$result = mysql_query("SELECT * FROM customer WHERE transactionum='$id'");
while($row = mysql_fetch_array($result))
	{
		echo 'Transaction Number: '.$row['transactionum'].'<br>';
		echo 'Name: '.$row['fname'].' '.$row['lname'].'<br>';
		echo 'Address: '.$row['address'].'<br>';
		echo 'Contact: '.$row['contact'].'<br>';
		echo 'Payable: '.$row['payable'].'<br>';
	}
$results = mysql_query("SELECT * FROM reserve WHERE transactionnum='$id'");
while($rows = mysql_fetch_array($results))
	{
		$ggagaga=$rows['bus'];
		echo 'Route and Type of Bus: ';
		$resulta = mysql_query("SELECT * FROM route WHERE id='$ggagaga'");
		while($rowa = mysql_fetch_array($resulta))
			{
			echo $rowa['route'].'     :'.$rowa['type'];
			$time=$rowa['time'];
			}
		echo 'Time of Departure: '.$time;
		echo '<br>';
		echo 'Seat Number: '.$setnum.'<br>';
		echo 'Date Of Travel: '.$rows['date'].'<br>';
		
	}
?>
<a href="index.php" style="color:red";>GOTO ---> Home</a>
</div>
				<div class="column-clear"></div>
            </div>
			<div class="clearfix"></div>
        </div>
    </div>
    


	<div id="footer">
	<h4>+63(2)3525393 &bull; <a href="contact-us.php">Hyderabad ,Ameerpet ,opp of satyam theoter.  </a></h4>
	<p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Mon - Sun: 10:00 am - 12:00 am</p>
	<a href="index.php"><img src="xres/images/footer-logo.jpg" alt="James Buchanan Pub and Restaurant" /></a>
	<p>&copy; Copyright 2015 StarNight Bus | All Rights Reserved <br /></p>
</div>
</div>
</body>
</html>

--------------


<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Inel Power System</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
