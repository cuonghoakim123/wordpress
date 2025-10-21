<?php
/**
 * The template for displaying single post pages
 */
get_header(); ?>

<article class="single-post" style="margin-top: 110px; padding-top: 100px;">
    <?php while (have_posts()) : the_post(); ?>
        <div style="max-width: 900px; margin: 0 auto; padding: 0 30px 100px;">
            <header class="entry-header" style="margin-bottom: 40px;">
                <p class="section-title">TIN TỨC</p>
                <h1 style="font-size: 36px; color: var(--primary-color); margin-bottom: 20px; line-height: 1.4;">
                    <?php the_title(); ?>
                </h1>
                <div class="entry-meta" style="color: var(--text-light); font-size: 15px; margin-bottom: 30px;">
                    <span><i class="fas fa-user"></i> <?php echo get_the_author(); ?></span>
                    <span style="margin: 0 15px;">|</span>
                    <span><i class="fas fa-calendar"></i> <?php echo get_the_date('d/m/Y'); ?></span>
                    <span style="margin: 0 15px;">|</span>
                    <span><i class="fas fa-folder"></i> <?php the_category(', '); ?></span>
                </div>
                
                <?php if (has_post_thumbnail()) : ?>
                    <div class="featured-image" style="margin-bottom: 40px; border-radius: 10px; overflow: hidden;">
                        <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: auto;')); ?>
                    </div>
                <?php endif; ?>
            </header>
            
            <div class="entry-content" style="font-size: 17px; line-height: 1.8; color: var(--text-dark);">
                <?php the_content(); ?>
            </div>
            
            <?php if (has_tag()) : ?>
                <div class="entry-tags" style="margin-top: 40px; padding-top: 30px; border-top: 1px solid #ddd;">
                    <strong style="color: var(--primary-color);">Tags: </strong>
                    <?php the_tags('', ', ', ''); ?>
                </div>
            <?php endif; ?>
            
            <!-- Post Navigation -->
            <div class="post-navigation" style="margin-top: 60px; display: flex; justify-content: space-between; gap: 30px;">
                <div style="flex: 1;">
                    <?php
                    $prev_post = get_previous_post();
                    if ($prev_post) : ?>
                        <a href="<?php echo get_permalink($prev_post); ?>" style="display: block; padding: 20px; background: var(--light-bg); border-radius: 8px; transition: all 0.3s ease;">
                            <span style="font-size: 14px; color: var(--text-light);">← Bài trước</span>
                            <h4 style="margin-top: 10px; color: var(--primary-color); font-size: 16px;">
                                <?php echo get_the_title($prev_post); ?>
                            </h4>
                        </a>
                    <?php endif; ?>
                </div>
                <div style="flex: 1; text-align: right;">
                    <?php
                    $next_post = get_next_post();
                    if ($next_post) : ?>
                        <a href="<?php echo get_permalink($next_post); ?>" style="display: block; padding: 20px; background: var(--light-bg); border-radius: 8px; transition: all 0.3s ease;">
                            <span style="font-size: 14px; color: var(--text-light);">Bài sau →</span>
                            <h4 style="margin-top: 10px; color: var(--primary-color); font-size: 16px;">
                                <?php echo get_the_title($next_post); ?>
                            </h4>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            
            <!-- Related Posts -->
            <?php
            $categories = get_the_category();
            if ($categories) {
                $category_ids = array();
                foreach ($categories as $category) {
                    $category_ids[] = $category->term_id;
                }
                
                $related_args = array(
                    'category__in'   => $category_ids,
                    'post__not_in'   => array(get_the_ID()),
                    'posts_per_page' => 3,
                    'orderby'        => 'rand'
                );
                
                $related_query = new WP_Query($related_args);
                
                if ($related_query->have_posts()) : ?>
                    <section style="margin-top: 80px;">
                        <h3 style="font-size: 28px; color: var(--primary-color); margin-bottom: 40px; text-align: center;">
                            Bài viết liên quan
                        </h3>
                        <div class="news-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                            <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
                                <article class="news-card">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <div class="news-card-image">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail('news-thumb'); ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                    <div class="news-card-content">
                                        <h3 class="news-card-title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                        <p class="news-card-meta">
                                            <?php echo get_the_date('d/m/Y'); ?>
                                        </p>
                                        <a href="<?php the_permalink(); ?>" class="news-card-link">
                                            Xem thêm →
                                        </a>
                                    </div>
                                </article>
                            <?php endwhile; ?>
                        </div>
                    </section>
                <?php
                    wp_reset_postdata();
                endif;
            }
            ?>
        </div>
    <?php endwhile; ?>
</article>

<?php get_footer(); ?>
