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
                        <?php the_post_thumbnail('card'); ?>
                    </figure>
                    
                    <?php if( function_exists( 'bcn_display' ) ){ ?>
                    <div>
                        <p><?php bcn_display(); ?></p>
                    </div>
                    <?php } ?>
                    
                    <section class="card-section">
                        <h2 class="card-section-title"><?php the_title(); ?></h2>
                        
                        <?php if( $post->post_excerpt ) { ?>
                        <div class="tagline"><?php the_excerpt(); ?></div>
                        <?php } ?>
                        
                        <div class="card-section-meta">
                            <time class="card-section-meta-date" datetime="<?php the_time( 'Y-m-d' ) ?>"><?php the_time( 'l, d F Y' ) ?></time>
                            <span class="card-section-meta-author">By: <?php the_author(); ?></span>
                        </div>
                        <div class="card-section-excerpt">
                            <?php the_content(); ?>
                            <?php edit_post_link( 'Edit', '<p>', '</p>' ); ?>   
                        </div>

                    </section>
                    
                <?php
                
                if( get_post_custom_values( 'us_debt' ) != "" ) {
                    setlocale(LC_MONETARY, 'en_US');

                    $wcmd_theme_us_debt = get_post_custom_values('us_debt');
                    $wcmd_theme_current_figure = get_post_custom_values('us_population');

                    if (isset($wcmd_theme_us_debt[0]) && isset($wcmd_theme_current_figure[0])) {
                        $debt = floatval($wcmd_theme_us_debt[0]);
                        $population = floatval($wcmd_theme_current_figure[0]);

                        if ($population > 0) {
                            $debt_per_person = $debt / $population;

                            echo '<h1>If we split the national debt of $33 trillion among every citizen of the USA, we would owe $';
                            echo number_format($debt_per_person); // Format as currency
                            echo ' per person</h1>';
                        } else {
                            echo '<h1>Population figure is not valid</h1>';
                        }
                    } else {
                        echo '<h1>Data not available</h1>';
                    }
                }
                ?>
                </div>
                <?php endwhile; else: ?>
                <section class="card-section">
                    <p class="card-section-excerpt"><?php _e( 'Sorry, no posts matched your criteria!' ); ?></p>
                </section>
                <?php endif; ?>
            </li>
        </ol>
    </main>

    <?php get_sidebar(); ?>
</div>

<?php
get_footer();
?>