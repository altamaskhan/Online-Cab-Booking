<?php
session_start();
//Unset the variables stored in session
unset($_SESSION['SESS_MEMBER_ID']);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
<link rel="icon" type="image/png" href="xres/images/favicon.png" />

<script type="text/javascript" src="xres/js/saslideshow.js"></script>
<script type="text/javascript" src="xres/js/slideshow.js"></script>
<script src="js/jquery-1.5.min.js" type="text/javascript" charset="utf-8"></script>
<script src="vallenato/vallenato.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="vallenato/vallenato.css" type="text/css" media="screen" charset="utf-8">

		<script type="text/javascript">
		$("#slideshow > div:gt(0)").hide();

		setInterval(function() { 
		  $('#slideshow > div:first')
			.fadeOut(1000)
			.next()
			.fadeIn(1000)
			.end()
			.appendTo('#slideshow');
		},  3000);
	</script>
	<!--sa calendar-->	
	
		<script type="text/javascript" src="js/datepicker.js"></script>
        <link href="css/demo.css"       rel="stylesheet" type="text/css" />
        <link href="css/datepicker.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript">


		function makeTwoChars(inp) {
				return String(inp).length < 2 ? "0" + inp : inp;
		}

		function initialiseInputs() {

				document.getElementById("sd").value = "";
				document.getElementById("ed").value = "";

				datePickerController.addEvent(document.getElementById("sd"), "change", setReservationDates);
		}

		var initAttempts = 0;

		function setReservationDates(e) {
						
				try {
						var sd = datePickerController.getDatePicker("sd");
						var ed = datePickerController.getDatePicker("ed");
				} catch (err) {
						if(initAttempts++ < 10) setTimeout("setReservationDates()", 50);
						return;
				}


				var dt = datePickerController.dateFormat(this.value, sd.format.charAt(0) == "m");


				if(dt == 0) return;


				var edv = datePickerController.dateFormat(document.getElementById("ed").value, ed.format.charAt(0) == "m");


				ed.setRangeLow( dt );
				

				if(edv < dt) {
						document.getElementById("ed").value = "";
				}
		}

		function removeInputEvents() {

				datePickerController.removeEvent(document.getElementById("sd"), "change", setReservationDates);
		}

		datePickerController.addEvent(window, 'load', initialiseInputs);
		datePickerController.addEvent(window, 'unload', removeInputEvents);

		//]]>
		</script> 

</head>

<body>
<div id="wrapper">
	<div id="header">
    <h1><a href="index.php"><img src="xres/images/LOGO.png" class="logo" style="left: 280px;top:10px;" alt="James Buchanan Pub and Restaurant" /></a></h1></br>
        <ul id="mainnav" >
			<li class="current"><a href="a.php">Home</a></li>
            <li><a href="m.php">Gallery</a></li>
            <li><a href="n.php">History</a></li>
            <li><a href="r.php">Routes</a></li>
            <li><a href="o.php">location</a></li>
            <li><a href="co.php">Contact Us</a></li>
			   <li><a href="signout.php">Sign Out</a></li>
    	</ul>
	</div>
    <div id="content">
    	<div id="rotator">
              <ul>
                    <li class="show"><img src="images/images/honda5.jpg"   width="861" height="379"  alt="" /></li>
                    <li><img src="images/images/honda1.jpg" width="861" height="379"  alt="" /></li>
                    <li><img src="images/images/honda2.jpg" width="861" height="379"  alt="" /></li>
                    <li><img src="images/images/honda3.jpg" width="861" height="379"  alt="" /></li>
              </ul>
			  
			  <div id="logo" style="left: 10px; height: auto; top: 23px; width: 260px; position: absolute; z-index:4;">
					
					<h2 class="accordion-header" style="height: 18px; margin-bottom: 15px; color: rgb(255, 255, 255); background: none repeat scroll 0px 0px rgb(53, 48, 48);">Ticket Booking</h2>
					<div class="accordion-content" style="margin-bottom: 15px;">
					
					
						<form action="selectset.php" method="post" style="margin-bottom:none;">
						<span style="margin-right: 11px;">
						Select Route: 
						<select name="route" style="width: 191px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/>
						<?php
						include('db.php');
						$result = mysql_query("SELECT * FROM route");
						while($row = mysql_fetch_array($result))
							{
								echo '<option value="'.$row['id'].'">';
								echo $row['route'].'  :'.$row['type'].'  :'.$row['time'];
								echo '</option>';
							}
						?>
						</select>
						
						</span><br><br>
						
						<span style="margin-right: 11px;">Date: 
						<input type="text" class="w8em format-d-m-y highlight-days-67 range-low-today" name="date" id="sd" value="" maxlength="100" readonly="readonly" class="date required" style="width: 191px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/>
						</span><br>
						<span style="margin-right: 11px;">No. of Passenger: 
						<select name="qty" id="p" style="width: 191px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						</select>
						</span><br><br>
				
						
						</span><br><br>
						<input type="submit" id="submit" value="Next" style="height: 34px; margin-left: 15px; width: 191px; padding: 5px; border: 3px double rgb(204, 204, 204);" />
						</form>
						
						
					</div>
				
				</div>
        </div>
		
    </div>
    <div id="featured">
        <div id="items">
            <div class="item"> <a href="main-course.php"><img src="xres/images/cab.png" alt="" /></a>
            <h3><a href="main-course.php">Specials Offers</a></h3>
            <p><a href="#"><strong>AC Cab</strong><br />
			Come in and experience<br /> Our
			new Cab Type<br /> specials today!</a></p>  
            </div>
            <div class="item"> <a href="lodging.php"><img src="xres/images/cab.png" alt="" /></a>
            <h3><a href="lodging.php">New Route</a></h3>
            <p><a href="lodging.php"><strong>From HYD to VIJ Vice versa</strong><br />
			Spend a relaxing evening in our circa 1796 hotel, steeped in history. </a></p>  
			</div>
			
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
