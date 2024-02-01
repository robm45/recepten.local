<!DOCTYPE html>
<html lang="nl">
    <head>
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        />
        <!-- main css -->
        <link rel="stylesheet" href="./css/main.css" />
    </head>

<?php

include "database.php";

$receptid = $_GET["recept_id"];

$query = "SELECT * FROM ReceptenImage WHERE ReceptId='$receptid'";

if ($result = mysqli_query($conn, $query)) {
    // Fetch one and one row
    while ($row = mysqli_fetch_row($result)) {
#      printf ("%s (%s)\n", $row[0], $row[1]);
      $receptimage=$row[1];
      $werkwijze=$row[2];
    }
    mysqli_free_result($result);
}
#echo $receptimage
#$werkwijze = "<p> <strong> Beschrijving bereiding </strong>
#              <div class='single_instruction'>
#               <header> 
#                  <p><strong><em> step 4 </em></strong></p>
#               </header> 
#               <p>Shabby chic humblebrag banh mi bushwick, banjo kale chips meggings. 
#                Cred selfies sartorial, cloud bread disrupt blue bottle seitan. 
#                Dreamcatcher tousled <strong>bitters</strong>, health goth vegan venmo whatever street art lyft shabby chic pitchfork beard. 
#                Drinking vinegar poke tbh, iPhone coloring book polaroid truffaut tousled ramps pug trust fund letterpress. 
#                Portland four loko austin chicharrones bitters single-origin coffee. Leggings letterpress occupy pour-over.
#                </p>  
#              </div> "
# 
?>    

<body>

    <main class="page">
        <div class="header"></div>
        <div class="recept-page">
            <section class="recipe-hero">
                <img src=<?php echo $receptimage?> class="img recipe-hero-img"/>
                <?php echo $werkwijze ?>
            </section>    
        </div>
>        <script src="./scripts/header.js"></script
    </main>
</body>
</html>