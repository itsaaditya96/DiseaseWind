<!DOCTYPE html>
<html lang="en">
<head>
	<title>Report</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor_report/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts_report/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor_report/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor_report/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor_report/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css_report/util.css">
	<link rel="stylesheet" type="text/css" href="css_report/main.css">
<!--===============================================================================================-->
	<link rel="apple-touch-icon" sizes="180x180" href="images/icon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/icon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/icon/favicon-16x16.png">
	<link rel="manifest" href="images/icon/site.webmanifest">
	<link rel="mask-icon" href="images/icon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#b91d47">
	<meta name="theme-color" content="#ffffff">
<!--===============================================================================================-->

</head>
<body>

	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver3 m-b-110" style="overflow-x:auto;">
				<p align='right'><a href="chart.php">Click here for analysis</a></p>
					<table data-vertable="ver3">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1">Response Id</th>
								<th class="column100 column2" data-column="column2">Name</th>
								<th class="column100 column3" data-column="column3">Email</th>
								<th class="column100 column4" data-column="column4">Subject</th>
								<th class="column100 column5" data-column="column5">Location</th>
								<th class="column100 column6" data-column="column6">Message</th>
								<th class="column100 column7" data-column="column7">Month</th>
							</tr>
						</thead>
						<tbody>
						<tr>
							<?php include 'report_data.php'; ?>
						</tbody>
					</table>
				</div>
			</div>
			
		</div>
	</div>

<!--===============================================================================================-->	
	<script src="vendor_report/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor_report/bootstrap/js/popper.js"></script>
	<script src="vendor_report/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor_report/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js_report/main.js"></script>

</body>
</html>