<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="vDE_FOOD</title>
</head>iewport" content="width=device-width, initial-scale=1.0">
    <title>INTREPI

<body>
    <h1 style="color:brown">BIENVENUE CHEZ INTREPIDE_FOOD</h1>
    <form method="post" enctype="multipart/form-data" action="publication.php">
        <div class="mb-3 mt-5">
            <label for="nom" class="form-label">Nom du plat</label>
            <input type="text" class="form-control" name="nom" placeholder="Ex: Riz sauce graine">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Image du plat</label>
            <input class="form-control" type="file" id="formFile" name="photo">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Envoyer</button>
    </form>
</body>

</html>