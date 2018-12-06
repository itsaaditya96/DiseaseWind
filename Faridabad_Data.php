<?php 
error_reporting(E_ALL & !E_NOTICE);
include 'getpostdb.php';

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<head>
    <title>Faridabad</title>
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <script>
        window.onload = function () {

        var options = {
            animationEnabled: true,
            title: {
                text: "Faridabad (Haryana)"
            },
            data: [{
                type: "doughnut",
                innerRadius: "40%",
                showInLegend: true,
                legendText: "{label}",
                indexLabel: "{label}: #percent%",
                dataPoints: [
                    <?php
                        $sql = "SELECT DISTINCT(subject), COUNT(subject) FROM responses WHERE location = 'Faridabad (Haryana)' GROUP BY subject";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {

                                ?>
                                    { label: "<?php echo $row["subject"]; ?>", y: <?php echo $row["COUNT(subject)"];?> },
                                <?php
                            }
                        }
                    ?>
                    // { label: "Department Stores", y: 6492917 },
                    // { label: "Discount Stores", y: 7380554 },
                    // { label: "Stores for Men / Women", y: 1610846 },
                    // { label: "Teenage Specialty Stores", y: 950875 },
                    // { label: "All other outlets", y: 900000 }
                ]
            }]
        };
        $("#chartContainer").CanvasJSChart(options);

        }
    </script>
</head>
<body>
    <div id="chartContainer" style="height: 300px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
</body>