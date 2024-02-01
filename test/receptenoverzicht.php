<!DOCTYPE html>
<link rel="stylesheet" href="./css/main.css" />
<body>
    <main class=page>
        <div class="header"></div>
        <div class="recipes-container">
            <?php
            include "database.php";

            $query = "SELECT Recepten.ReceptId, Recepten.ReceptNaam, Recepten.MapNummer, Recepten.HoesNummer, ReceptenImage.ReceptId, ReceptenImage.Image from Recepten, ReceptenImage WHERE Recepten.ReceptId = ReceptenImage.ReceptId";

            if($result = $conn->query($query)) {
                while($row = $result->fetch_assoc()) {
                    $receptid = $row["ReceptId"];
                    $receptnaam = $row["ReceptNaam"];
                    $mapnummer = $row["MapNummer"];
                    $hoesnummer = $row["HoesNummer"];
                    $receptimage = $row["Image"]; 
                    #single recipe -->
                    echo "<div class=recipes-list><a href=./receptbeschrijving.php?recept_id=$receptid class=recipe>
                    <img src=$receptimage alt='Food' class=recipe-img /> 
                    <h6>$receptnaam<br>Map :$mapnummer-$hoesnummer<h6> 
                    </a></div>";
                    #echo $single-recipe;
                    #end single recipes     
                }
                $result->free();
            } 
            ?>
        </div>
        <script src="./scripts/header.js"></script>
    </main>

</body>
</html>