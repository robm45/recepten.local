<!DOCTYPE html>
<head>
    <title>Recept invoer</title>
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/normalize.css" />
    <link
      rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"
    />
    <script> src="./scripts/invoer_check.js"</script>
</head>
<body>
    <main class=page>
        <div class="header"></div>
        <h2>Recept werkwijze invoer</h2>
        <form method="POST" action="insertrecept.php" name="InputRecept" >  
            <div id="id-group" class="form-group">
                <label for="receptId">Recept Nummer:</label> 
                <input
                    type="text"
                    class="form-control"
                    id="receptId"
                    name="receptId" 
                    placeholder="Recept nummer"
                />
            </div>

            <div id="foto-group" class="form-group">
                <label for="foto">Foto naam:</label> 
                <input
                    type="text"
                    class="form-control"
                    id="foto"
                    name="foto" 
                    placeholder="./images/main.jpeg"
                />
            </div>

            <div id="bereiding-group" class="form-group">
                <label for="bereiding">Bereiding:</label> 
                <input
                    type="textarea"
                    rows="50"
                    cols="120"
                    class="form-control"
                    id="bereiding"
                    name="bereiding" 
                    placeholder="Bereiding"
                />
            </div>

            <button type="submit" class="btn">
                Submit
            </button>    
        </form>             
    </main>
    <script src="./scripts/header.js"></script>
</body>
</html>