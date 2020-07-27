<div class="gallery">
    <div class="container">
        <?php
        require_once __DIR__ . './../../../vendor/autoload.php';
        use \Application\Core\Connection;
        $images = Connection::queryAll("SELECT * from `images`");

        foreach($images as $image): ?>
            <img src="/uploads/<?=$image['image_path']?>">
        <?php endforeach; ?>
    </div>
</div>
