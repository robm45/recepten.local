<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
    <link rel="stylesheet" href="./css/main.css" />
</head>
 
<body>
    <center>
        <div class="header"></div>
        <?php
        include "database.php";

        
        echo "Beheer module <br>";

        // Taking all 3 values from the form data(input)
        
        $receptId =  $_POST['receptId'];
        echo "$receptId\r\n" ;
        echo "\r\n";
        $foto = $_POST['foto'];
        echo "$foto\r";
        $bereiding =  $_POST['bereiding'];
        echo "$bereiding\r";
        /* 
        // Performing insert query execution
        // here our table name is college
        $query = "INSERT INTO ReceptenImage VALUES ('$receptId','$fotoNaam','$bereiding')";
         
        if(mysqli_query($conn, $query)){
            echo "<h3>data stored in a database successfully.<br>"</h3>"; 
            echo nl2br("\n$receptId\n $fotoNaam\n");
        } else{
            echo "ERROR: Hush! Sorry $query. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        */
        ?>
    </center>
    <script src="./scripts/header.js"></script>
</body>
 
</html>