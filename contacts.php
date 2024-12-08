<?php
/*
Template Name: Контакты
*/
get_header();
get_template_part( 'template-parts/content', 'head' );
global $themeshop;
?>
<div class="page container">
    <div class="page__content">
        <div class="page__item">
            <ul class="page__contact-list">
            <?php if($themeshop['phone']) { ?>
                <li><a href="tel:<?php echo str_replace(array("(", ")", "-", " "), "", $themeshop['phone']); ?>"><i class="icon-phone-alt"></i><?php echo $themeshop['phone']; ?></a></li>
                <?php } ?>
                <?php if($themeshop['email']) { ?>
                <li><a href="mailto:<?php echo $themeshop['email']; ?>"><i class="icon-envelope"></i><?php echo $themeshop['email']; ?></a></li>
                <?php } ?>
                <?php if($themeshop['adres']) { ?>
                <li><i class="icon-map-marker-alt"></i><?php echo $themeshop['adres']; ?></li>
                <?php } ?>
                <?php if($themeshop['time-york']) { ?>
                <li><i class="icon-clock"></i> <?php echo $themeshop['time-york']; ?></li>
                <?php } ?>
            </ul>
        </div>
        <div class="page__item">
        <?php if($themeshop['map']) { 
            echo $themeshop['map'];
        } ?>
        </div>
    </div>
</div>
<?php
get_footer();