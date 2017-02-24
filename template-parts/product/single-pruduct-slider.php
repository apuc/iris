<?php
/**
 * Created by PhpStorm.
 * User: apuc0
 * Date: 24.02.2017
 * Time: 11:11
 */
$attachment_ids = $product->get_gallery_attachment_ids();
if ($attachment_ids) {
    ?>
    <div class="product-slider-wrap">
        <div class="product-slider-for">
            <?php foreach ($attachment_ids as $attachment_id): ?>
                <div class="img-wrap">
                    <img src="<?= wp_get_attachment_image_url($attachment_id, 'full') ?>" alt="">
                </div>
            <?php endforeach; ?>
        </div>
        <div class="product-slider-nav">
            <?php foreach ($attachment_ids as $attachment_id): ?>
                <div class="img-wrap">
                    <img src="<?= wp_get_attachment_image_url($attachment_id) ?>" alt="">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php } ?>