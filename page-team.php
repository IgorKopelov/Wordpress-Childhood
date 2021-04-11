<?php
/*
    Template Name: Наша команда
*/ 
?>

<?php
    get_header();
?>

    <div class="specialists">
        <div class="container">
            <div class="title"><?php the_field('title_team'); ?></div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <?php
                        $image = get_field('img_team');

                        if (!empty($image)): ?>
                            <img 
                            src="<?php echo $image['url']; ?>" 
                            alt="<?php echo $image['alt']; ?>"
                            class="specialists__img">
                        <?php endif;
                    ?>
                </div>
            </div>
        </div>
    </div>

<?php
    get_footer();
?>