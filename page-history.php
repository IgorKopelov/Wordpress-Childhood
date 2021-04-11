<?php
/*
    Template Name: НАША ИСТОРИЯ
*/ 
?>

<?php
    get_header();
?>

<div class="aboutus">
    <div class="container">
        <h1 class="title">Наша история</h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('about_title1'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('aboutus__text1'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- <img class="aboutus__img" src="<?php echo bloginfo('template_url');?>/assets/img/about_1.jpg" alt="мир детства"> -->
                <?php
                    $image = get_field('img_title1');

                    if (!empty($image)): ?>
                        <img 
                        src="<?php echo $image['url']; ?>" 
                        alt="<?php echo $image['alt']; ?>"
                        class="specialists__img">
                    <?php endif;
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <!-- <img class="aboutus__img" src="<?php echo bloginfo('template_url');?>/assets/img/about_2.jpg" alt="мир детства"> -->
                <?php
                    $image = get_field('img_title2');

                    if (!empty($image)): ?>
                        <img 
                        src="<?php echo $image['url']; ?>" 
                        alt="<?php echo $image['alt']; ?>"
                        class="specialists__img">
                    <?php endif;
                ?>
            </div>
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('about_title2'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('aboutus__text2'); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('about_title3'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('aboutus__text3'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- <img class="aboutus__img" src="<?php echo bloginfo('template_url');?>/assets/img/about_3.jpg" alt="мир детства"> -->
                <?php
                    $image = get_field('img_title3');

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