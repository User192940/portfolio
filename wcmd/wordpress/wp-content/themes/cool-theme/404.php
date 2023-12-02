<?php
get_header();
?>
<div class="main-content">
    <main>
        <ol class="cards">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <li class="card">
                <div>
                    <figure class="card-figure">
                        <?php the_post_thumbnail(); ?>
                    </figure>
                    <?php if( function_exists( 'bcn_display' ) ){ ?>
                    <div>
                        <p><?php bcn_display(); ?></p>
                    </div>
                    <?php } ?>
                    
                    <section class="card-section">
                        <h2 class="card-section-title"><?php the_title(); ?></h2>
                        <div class="card-section-meta">
                            <time class="card-section-meta-date" datetime="<?php the_time( 'Y-m-d' ) ?>"><?php the_time( 'l, d F Y' ) ?></time>
                            <span class="card-section-meta-author">By: <?php the_author(); ?></span>
                        </div>
                        <div class="card-section-excerpt">
                            <?php the_content(); ?>
                               
                        </div>

                    </section>
                </div>
                <?php endwhile; else: ?>
                <section class="card-section">
                    <h2><?php _e( "Status Code: 404" ); ?></h2>
                    <p class="card-section-excerpt"><?php _e( 'The requested document was not found' ); ?></p>
                <?php endif; ?>
            </li>
        </ol>
    </main>

    <?php get_sidebar('404'); ?>
</div>

<?php
get_footer();
?>