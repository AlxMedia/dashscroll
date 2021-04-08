<?php $format = get_post_format(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('article-type-list'); ?>>	

	<div class="type-list-left">
		<div class="type-list-avatar">
			<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
				<?php echo get_avatar( get_the_author_meta( 'ID' ), '48' ); ?>
			</a>
		</div>
	</div>
	<div class="type-list-right">
		<div class="type-list-date"><?php the_time( get_option('date_format') ); ?></div>
		<div class="type-list-right-inner <?php if ( has_post_thumbnail() ): ?>has-thumbnail<?php endif; ?>">
			
			<?php if ( has_post_thumbnail() ): ?>
				<div class="type-list-thumbnail">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('dashscroll-small'); ?>
						<?php if ( has_post_format('video') && !is_sticky() ) echo'<span class="thumb-icon small"><i class="fas fa-play"></i></span>'; ?>
						<?php if ( has_post_format('audio') && !is_sticky() ) echo'<span class="thumb-icon small"><i class="fas fa-volume-up"></i></span>'; ?>
						<?php if ( is_sticky() ) echo'<span class="thumb-icon small"><i class="fas fa-star"></i></span>'; ?>
					</a>
				</div>
			<?php endif; ?>
			
			<h2 class="type-list-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2>
			
			<?php if (get_theme_mod('excerpt-length','26') != '0'): ?>
				<div class="type-list-excerpt">
					<?php the_excerpt(); ?>
				</div>
				<a class="type-list-more" href="<?php the_permalink(); ?>"><?php esc_html_e('Read More','dashscroll'); ?></a>
			<?php endif; ?>
			
		</div>
		<ul class="type-list-meta">
			<li><i class="far fa-folder"></i> <?php the_category(' / '); ?></li>
			<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) == 'on' ) ): ?>
				<li>
					<i class="far fa-comments"></i> <a class="post-comments" href="<?php comments_link(); ?>"><span><?php comments_number( '0', '1', '%' ); ?></span></a>
				</li>
			<?php endif; ?>
		</ul>
	</div>

</article><!--/.post-->	