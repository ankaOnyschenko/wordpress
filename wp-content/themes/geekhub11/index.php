<?php get_header('home'); ?>
	<div id="content">
		<div class="home">
            <h2>ДЕТАЛІ КУРСІВ ТА РЕЄСТРАЦІЯ</h2>
            <ul class="types">
                <?php if ( have_posts() ) : 
				query_posts('cat=3'); 
				while (have_posts()) : the_post(); ?>
				<li>
                	<img src="<?php bloginfo('template_directory'); ?>/images/icon-frontend.png" />
                    <a class="title" href="#"><h3><?php the_title(); ?></h3></a>
                    <p><?php the_excerpt();?></p>
                    <a href="<?php the_permalink(); ?>">Докладніше + реєстрація</a>
                </li>

                <?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>
            </ul> 
<?php get_footer('home'); ?>