<html <?php language_attributes(); ?>>
<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
    <?php get_template_part('includes/header'); ?>  
    
    <div class="firstview top-firstview">
        <div class="firstview__content top-firstview__content">
            <h1 class="firstview__catchcopy">呼び覚ませ</h1>
            <p class="firstview__ss-txt">2021 Spring & Summer</p>
        </div>
    </div>
    <div class="topics">
        <h2 class="topics-ttl">Topics</h2>
        <div class="topics-inner">
            <?php if (have_posts()) : ?>
              <?php query_posts('posts_per_page=3'); ?>
              <?php while (have_posts()) : the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="topics__item">

                <?php
                    $img = get_eyecatch_with_default();

                ?>

                    <div class="topics__item-img">
                        <img src="<?php echo $img[0]; ?>" alt="">
                    </div>
                    <div class="topics__item-content">
                        <h3 class="topics__item-ttl"><?php the_title(); ?></h3>
                    </div>
            </a>
            <?php endwhile; ?>
            <?php else : ?>
              <p>記事が見つかりませんでした</p>
            <?php endif; ?>
        </div>
    
         <a href="<?php echo home_url('/topics'); ?>" class="topics-btn">Topics一覧ページへ</a>
  
    </div>

    <div class="styles">
        <h2 class="styles-ttl">Styles</h2>
        <div class="styles-wrap">
            <?php
            $news_query = new WP_Query(
            array(
                'post_type' => 'styles',
                'posts_per_page' => 6
            )
            );
            ?>
            <?php if ($news_query->have_posts()) : ?>
                <?php while ($news_query->have_posts()) : ?>
                <?php $news_query->the_post(); ?>
                <?php
                  $img = get_eyecatch_with_default2();
                  ?>
            <a href="<?php the_permalink(); ?>" class="styles-wrap__item">
                <img src="<?php echo $img[0]; ?>" alt="">
            </a>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
        <a href="<?php echo home_url('/styles'); ?>" class="styles-btn">Styles一覧ページへ</a>
    </div>

    <div class="about">
        <div class="about__inner">
            <div class="about__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/about.png" alt="">
            </div>
            <div class="about__content">
                <p class="about__content-subttl">Make your World</p>
                <h2 class="about__content-ttl">個性が出せる<br>世界に</h2>
                <p class="about__content-txt"><span class="new-line">ここにはAboutのテキストが入る予定です。ここにはAboutのテキストが入る予定です。ここにはAboutのテキストが入る予定です。ここにはAboutのテキストが入る予定です。</span>ここにはAboutのテキストが入る予定です。ここにはAboutのテキストが入る予定です。</p>
                <a href="<?php echo home_url('/about'); ?>" class="about-btn">Aboutページへ</a>
            </div>
        </div>
    </div>


    <?php get_template_part('includes/footer'); ?>
</body>
<?php get_footer(); ?>
</html>