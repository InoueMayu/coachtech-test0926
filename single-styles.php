<<html <?php language_attributes(); ?>>
<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
    <?php get_template_part('includes/header'); ?> 

    <?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
    <div class="styles-single">
        <?php 
        $img = get_eyecatch_with_default2(); 
        ?>
        <div class="styles-single__img">
            <img src="<?php echo $img[0]; ?>" alt="">
        </div>
        <div class="styles-single__content">
            <h1>2021 Spring コットンニット</h1>
            <p>商品の説明文がここには入ります。商品の説明文がここには入ります。商品の説明文がここには入ります。商品の説明文がここには入ります。</p>
            <h2>サイズ展開</h2>
            <table>
                <tr>
                    <th>サイズ</th>
                    <th>身幅</th>
                    <th>肩幅</th>
                    <th>総丈</th>
                    <th>袖丈</th>
                </tr>
                <tr>
                    <td>S</td>
                    <td>36</td>
                    <td>32</td>
                    <td>57</td>
                    <td>28</td>
                </tr>
                <tr>
                    <td>M</td>
                    <td>38</td>
                    <td>36</td>
                    <td>59</td>
                    <td>30</td>
                </tr>
                <tr>
                    <td>L</td>
                    <td>40</td>
                    <td>38</td>
                    <td>61</td>
                    <td>32</td>
                </tr>
            </table>
            <h2>POINT</h2>
            <ul>
                <li>春~秋まで着れる</li>
                <li>着痩せするシルエット</li>
                <li>乾燥機に入れられる素材</li>
            </ul>
        </div>
    </div>
    <?php endwhile; ?>
     <?php endif; ?>
    <a class="styles-single__btn" href="<?php echo esc_url( '/styles' ); ?>">Styles一覧へ</a>

    <?php get_template_part('includes/footer'); ?>
</body>
<?php get_footer(); ?>
</html>