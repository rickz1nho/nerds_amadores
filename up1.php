<!DOCTYPE html>
<html>

<body>

    <form action="app/controllers/controllerForm.php?action=save" method="post" enctype="multipart/form-data">
        Selecione uma imagem para o Banner do post:
        <input required type="file" value="Selecione o arquivo" name="fileToUpload" id="fileToUpload">
        <br>
        <input type="submit" value="Uploadar" name="submit">
    </form>

</body>

</html>