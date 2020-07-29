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
</head>
<body>
    
    <?include(__DIR__ . './includes/header.php')?>

    <div class="container" style="display: flex; flex-flow: column nowrap; align-items: center; justify-content: center;">
        <form action="/application/controller/imageLoad.php" class="dropzone upload" id="upload">
            <div class="fallback">
                <input name="file" type="file" multiple require />
            </div>
        </form>
        <input type="submit" class="upload__button" value="Загрузить изображения" form="upload" >
    </div>
    
    <?include(__DIR__ . './includes/footer.php')?>

</body>
</html>