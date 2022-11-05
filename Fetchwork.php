<form style="background-color: lightgrey;">
	<head>
		<style type="text/css">
			table{
				border-colllapse: collapse;
				width: 100%;
				color: black;
				font-family: monospace;
				font-size: 17px;
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
		<h3 class="text-primary" id="im"><i>From the list, study carefully the details of available House Workers; Then note down the details of a worker(s) your choice. Contact them</i></h3>
		<marquee id="mq"><h4><i>Wish you the best of luck as you look for House worker. Have a nice time!!</i></h4></marquee>
	</center>
	    <table>
	      <tr>
		<th>Id Number</th>
		<th>Worker Name</th>
		<th>Gender</th>
		<th>Age</th>
		<th>Phone Number</th>
		<th>County</th>
		<th>Location</th>
		<th>Address</th><br>
		<th>Level of Education</th>
		<th>Witness Name</th>
		<th>Witness Phone</th>
		<th>Witness Location</th>
	
	</tr>
	<?php
	$conn = mysqli_connect("localhost","root","","my_mboch");
	$sql = "SELECT * FROM worker";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while ($row = $result-> fetch_assoc()) {
			echo "<tr><td>" . $row["idNum"] . "</td><td>" . $row["name"] . "</td><td>" . $row["gender"] . "</td><td>" . $row["age"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["fldCounty"] . "</td><td>" . $row["current"] . "</td><td>" . $row["address"] . "</td><td>" . $row["levelEducation"] . "</td><td>" . $row["witname"] . "</td><td>" . $row["witphone"] . "</td><td>" . $row["loc"] . "</td><tr>";


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
</form>