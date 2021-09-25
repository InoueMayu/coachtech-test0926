<html <?php language_attributes(); ?>>
<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
    <?php get_template_part('includes/header'); ?> 

    
    <div class="topics-firstview firstview">
        <div class="firstview__content">
            <h2 class="firstview__catchcopy">特集</h2>
            <p class="firstview__ss-txt">Topics</p>
            <a href="<?php echo esc_url( '/topics' ); ?>" class="firstview__btn">特集一覧ページへ</a>
        </div>
    </div>


    <main class="single-main">
        <?php if(have_posts()): ?>
             <?php while(have_posts()): the_post(); ?>
        <div class="container">
            <h1><?php the_title(); ?></h1>
            <?php 
            $img = get_eyecatch_with_default2(); 
            ?>
            <img src="<?php echo $img[0]; ?>" alt="">
            <h2>見出しタイトルh2がここには入ります。</h2>
            <p>本文の中身がここには入ります。本文の中身がここには入ります。本文の中身がここには入ります。本文の中身がここには入ります。本文の中身がここには入ります。</p>
            <h3>見出しタイトルh3がここには入ります。</h3>
            <p>本文の中身がここには入ります。本文の中身がここには入ります。本文の中身がここには入ります。本文の中身がここには入ります。本文の中身がここには入ります。</p>
            <h4>見出しタイトルh4がここには入ります。</h4>
            <p>本文の中身がここには入ります。本文の中身がここには入ります。本文の中身がここには入ります。本文の中身がここには入ります。本文の中身がここには入ります。</p>
        </div>
        <?php endwhile; ?>
         <?php endif; ?>
    </main>

    


    <?php get_template_part('includes/footer'); ?>
</body>
<?php get_footer(); ?>
</html>