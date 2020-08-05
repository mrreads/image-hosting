<div class="gallery image">
    <div class="container">
        <?php
        require_once __DIR__ . './../../../vendor/autoload.php';
        use \Application\Core\Connection;
        use Application\Core\Route;

        $images = Connection::queryAll("SELECT * from `images` WHERE images.image_path LIKE '". Route::getURL() ."%';");

        foreach($images as $image): ?>
        
            <img src="/uploads/<?=$image['image_path']?>">    
            
        <?php endforeach; ?>

        <a class="original" href="/uploads/<?=$image['image_path']?>"> Открыть оригинал </a>
    
    </div>
</div>
