<link rel="stylesheet" href="./css/main.css" />
<?php

include "database.php";

$query = "SELECT * FROM Recepten";

echo'<table class="tabel-header"> 
      <tr> 
          <td> <font face="Arial">Id</font> </td> 
          <td> <font face="Arial">Naam</font> </td> 
          <td> <font face="Arial">Aantal Personen</font> </td> 
          <td> <font face="Arial">Bereidingstijd</font> </td> 
          <td> <font face="Arial">Keukengerei</font> </td> 
          <td> <font face="Arial">Hoesnummer</font> </td> 
      </tr>';


if($result = $conn->query($query)) {
    while($row = $result->fetch_assoc()) {
        $field1name = $row["ReceptenId"];
        $field2name = $row["ReceptNaam"];
        $field3name = $row["Personen"];
        $field4name = $row["Bereidingstijd"];
        $field5name = $row["KeukengereiID"]; 
        $field6name = $row["MapNummer"];
        $field7name = $row["HoesNummer"];
echo'<tr class="data-fields"> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td>
                  <td>'.$field6name.'-'.$field7name.'</td> 
     </tr>';
    }
    $result->free();
} 
?>