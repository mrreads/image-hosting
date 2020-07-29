<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Загрузить изображение </title>
    <link rel="stylesheet" href="/application/views/resources/css/general.css">
    <script src="/application/views/resources/js/upload_droparea.js" defer></script>
</head>
<body>
    
    <?include(__DIR__ . './includes/header.php')?>

    <div class="container">
        <div class="upload">
            <div class="upload__droparea">
                <p> Перетащи изображение сюда </p>
            </div>
            
            <form enctype="multipart/form-data" method="POST" action="/application/controller/imageLoad.php" class="upload__form">
                <input type="text" name="succ" value="блять">
                <input  name="upload[]"  type="file" multiple required>
                <input type="submit" value="загрузить">
            </form>
        </div>
    </div>
    
    <?include(__DIR__ . './includes/footer.php')?>

</body>
</html>