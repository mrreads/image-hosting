<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Домашняя страница </h1>

    <form enctype="multipart/form-data" method="POST" action="/application/controller/imageLoad.php">
        <input  name="upload[]"  type="file" multiple>
        <input type="submit" value="загрузить">
    </form>
</body>
</html>