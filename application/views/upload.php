<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Загрузить изображение </title>
    <link rel="stylesheet" href="/application/views/resources/lib/dropzone.min.css">
    <script src="/application/views/resources/lib/dropzone.min.js" defer></script>
    <link rel="stylesheet" href="/application/views/resources/css/general.css">
    <script src="/application/views/resources/js/upload.js" defer></script>
</head>
<body>
    
    <?include(__DIR__ . './includes/header.php')?>

    <div class="container containerUpload">
        
        <form enctype="multipart/form-data" method="POST" action="/application/controller/imageLoad.php" class="dropzone upload" id="upload">
            <div class="uploaded"> <p> Успешно загруженно! </p> </div>
            
            <div class="fallback">
                <input  name="upload[]"  type="file" multiple>
            </div>
        </form>
        <input type="submit" class="upload__button disabled" value="Загрузить изображения" form="upload" >
    </div>
    
    <?include(__DIR__ . './includes/footer.php')?>

</body>
</html>