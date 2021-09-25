html <?php language_attributes(); ?>>
<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
    <?php get_template_part('includes/header'); ?>  

    <div class="firstview topics-firstview">
        <div class="firstview__content">
            <h1 class="firstview__catchcopy">特集一覧</h1>
            <p class="firstview__ss-txt">Topics List</p>
        </div>
    </div>

    <div class="topics topics-archive">
        <div class="topics-inner">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php 
                    $img = get_eyecatch_with_default(); 
                ?>
            <a href="<?php the_permalink(); ?>" class="topics__item">
                <div class="topics__item-img">
                    <img src="<?php echo $img[0]; ?>" alt="">
                </div>
                <div class="topics__item-content">
                    <h2 class="topics__item-ttl"><?php the_title(); ?></h2>
                </div>
            </a>
            <?php endwhile; ?>
            <?php else : ?>
              <p>記事が見つかりませんでした</p>
            <?php endif; ?>
            
        </div>
    </div>



    <?php get_template_part('includes/footer'); ?>
</body>
<?php get_footer(); ?>
</html>