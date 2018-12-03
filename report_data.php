<?php 
error_reporting(E_ALL & !E_NOTICE);
include 'getpostdb.php';

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    $sql = "SELECT response_id, Name, Email, Subject, Location, Message, DATE_FORMAT(time,'%M, %Y') as showdate FROM getintouch;";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <td class="column100 column1" data-column="column1"><?php echo $row["response_id"]?></td>
                <td class="column100 column2" data-column="column2"><?php echo $row["Name"]?></td>
                <td class="column100 column3" data-column="column3"><?php echo $row["Email"]?></td>
                <td class="column100 column4" data-column="column4"><?php echo $row["Subject"]?></td>
                <td class="column100 column5" data-column="column5"><?php echo $row["Location"]?></td>
                <td class="column100 column6" data-column="column6"><?php echo $row["Message"]?></td>
                <td class="column100 column7" data-column="column7"><?php echo $row["showdate"]?></td>
            </tr>
        <?php
        }
    }
?>