<!DOCTYPE html>
<html>
    <head>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }

            table, td, th {
                border: 1px solid black;
                padding: 5px;
            }

            th {text-align: left;}
        </style>
    </head>
    <body>

        <?php
        $q = intval($_GET['q']);

        $con = mysqli_connect('localhost', 'root', '', 'db_realsate');
        if (!$con) {
            die('Could not connect: ' . mysqli_error($con));
        }

        mysqli_select_db($con, "ajax_demo");
        $sql = "SELECT * FROM tbl_upcoming_project WHERE city = '" . $q . "'";
        echo $sql;
        $result = mysqli_query($con, $sql); 
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['project_name'] . "</td>"; 
            echo "</tr>";
        }
        echo "</table>";
        mysqli_close($con);
        ?>
    </body>
</html>