<?php 
session_start();
if(!isset($_SESSION['loginname'])){
    var_dump($_SESSION['loginname']);
    header('Location: login.php');
}

require 'inc/head.php'; 
require 'inc/data/products.php';
?>
<section class="cookies container-fluid">
    <div class="row">
    <?php foreach ($_SESSION['cookies'] as $id => $qtt) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $catalog[$id]['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $catalog[$id]['name']; ?></h3>
                        <p><?=  $catalog[$id]['description']; ?></p> 
                        <p>Quantité: <?=  $qtt; ?></p> 
                    </figcaption>
                </figure>
            </div>
        <?php } ?>  
    </div>
</section>
<?php require 'inc/foot.php'; ?>
