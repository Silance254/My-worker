<form style="background-color:lightgrey;">
	<head>
		<style type="text/css">
			table{
				border-colllapse: collapse;
				width: 100%;
				color: black;
				font-family: monospace;
				font-size: 17px;
				text-align: left;
			}
			th{
				background-color: darkblue;
				color: white;
			}
			tr:nth-child(even){
				background-color: #ededed;
			}

            #im{
             background-color: darkgreen;
             color: white;
             font-style: italic;
             font-size: 20px;
               }
            #mq{
            background-color: pink;
            color: blue;
            background-size: 20px;
               }
		</style>
	</head>
	<body>
		<fieldset class="container">
		<center>
		<br><br>
		<h3 class="text-primary" id="im"><i>From the list, study carefully the deatils of available employers; Then note down the details of an employer(s) your choice. Contact them</i></h3>
		<marquee id="mq"><h4><i>Wish you the best of luck as you look for work. Have a nice time!!</i></h4></marquee>
	</center>
	    <table>
	      <tr>
		<th>Id Number</th>
		<th>Employer Name</th>
		<th>Age</th>
		<th>Gender</th>
		<th>Phone Number</th>
		<th>County</th>
		<th>Location</th>
		<th>Address</th><br>
		<th>Occupation</th>
		<th>Witness Name</th>
		<th>Witness Phone</th>
		<th>Witness Location</th>
	
	</tr>
	<?php
	$conn = mysqli_connect("localhost","root","","my_mboch");
	$sql = "SELECT * FROM employer";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while ($row = $result-> fetch_assoc()) {
			echo "<tr><td>" . $row["idNum"] . "</td><td>" . $row["fldName"] . "</td><td>" . $row["fldAge"] . "</td><td>" . $row["fldGender"] . "</td><td>" . $row["phoneNum"] . "</td><td>" . $row["fldCounty"] . "</td><td>" . $row["fldLocation"] . "</td><td>" . $row["fldAddress"] . "</td><td>" . $row["fldOccupation"] . "</td><td>" . $row["witName"] . "</td><td>" . $row["witPhone"] . "</td><td>" . $row["witLocation"] . "</td><tr>";


		}
	}
	else {
		echo "No Results";

	}
	$conn->close();
	?>
        </table>
	</body>
	<br><br>
<center>
	<a href="welcome.php" class="btn-btn-warning"><b>Back</b></a>
</center>
<br><br>
</fieldset>
</form>