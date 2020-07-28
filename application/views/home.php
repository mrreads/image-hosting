<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> imgHOST - хостинг изображений </title>
    <link rel="stylesheet" href="/application/views/resources/css/general.css">
</head>
<body>
    
    <?include(__DIR__ . './includes/header.php')?>

    <div class="container" style="display: flex; align-items: center">
        <h1 style="text-align: center; font-size: 48px;"> Главная страница </h1>
    </div>

    <?include(__DIR__ . './includes/gallery.php')?>

    <!-- <div class="container">
        <form enctype="multipart/form-data" method="POST" action="/application/controller/imageLoad.php">
            <input  name="upload[]"  type="file" multiple required>
            <input type="submit" value="загрузить">
        </form>
    </div> -->

    <?include(__DIR__ . './includes/footer.php')?>

</body>
</html>