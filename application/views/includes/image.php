<div class="gallery image">
    <div class="container">
        <?php
        require_once __DIR__ . './../../../vendor/autoload.php';
        use \Application\Core\Connection;
        use Application\Core\Route;

        $images = Connection::queryAll("SELECT * from `images` WHERE images.image_path LIKE '". Route::getURL() ."%';");

        foreach($images as $image): ?>
        
        <a href="<?=$extension = explode('.', $image['image_path'])[0]?>">
            <img src="/uploads/<?=$image['image_path']?>">
        </a>
            
        <?php endforeach; ?>
    </div>
</div>
