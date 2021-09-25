<html <?php language_attributes(); ?>>
<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
    <?php get_template_part('includes/header'); ?>  
    
    <div class="firstview styles-firstview">
        <div class="firstview__content">
            <h1 class="firstview__catchcopy">Styles一覧</h1>
            <p class="firstview__ss-txt">Styles List</p>
        </div>
    </div>

    <div class="styles">
        <div class="styles-wrap">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php 
                $img = get_eyecatch_with_default2(); 
            ?>
            <a href="<?php the_permalink(); ?>" class="styles-wrap__item">
                <img src="<?php echo $img[0]; ?>" alt="">
            </a>
            
            <?php endwhile;
            endif; ?>
        </div>
    </div>


    <?php get_template_part('includes/footer'); ?>
</body>
<?php get_footer(); ?>
</html>