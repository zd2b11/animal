<?php get_header(); ?>

        <div class="main">
        <?php if (have_posts()): ?>
          <?php while (have_posts()) : the_post(); ?>
          <article class="article-area">
            <h2 class="article-title"><?php the_title(); ?></h2>
            <div class="article-body">
              <?php the_content(); ?>
            </div>
          </article>
          <?php endwhile; ?>
        <?php endif; ?>
        </div>

<?php get_footer(); ?>