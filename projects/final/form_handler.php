<html>
	<head>
		<title>Form receipt</title>
	</head>
	<body>
		<p>
			Welcome <?php echo $_POST["first_name"]; ?> <br />
			Your email is <?php echo $_POST["email"]; ?> <br />
			Your answer to owning a M3 was <?php echo $_POST["yes_no"]; ?> <br />
			From the drop-down list you chose <?php echo $_POST["drop-down"]; ?> <br />
			You wrote <?php echo $_POST["para"]; ?> <br />
	</body>
</html>	