<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="hero hero-resul-item section" style="background-color: var(--dark-grey); color: var(--white);">
			<div class="container">
				<div class="hero-resul-item__wrapper">
					<h3><?php echo carbon_get_post_meta(get_the_ID(), 'title_result') ?></h3>
					<div class="hero-resul-item__excerpt">
						<?php the_title(); ?>
					</div>
				</div>
			</div>
		</div>
	</header><!-- .entry-header -->
	<div class="blog section" style="background-color: <?php echo carbon_get_post_meta(get_the_ID(), 'page_background') ?>;">
		<div class="container">
			<div class="blog__wrapper">
				<div class="blog__content blog-content">
					<div class="content">
						<div class="result__item--name">
							<?php the_excerpt(); ?>
						</div>
						<ul class="list arrow-gold t-20">
							<li>
								<?php echo carbon_get_post_meta(get_the_ID(), 'time_result') ?>
							</li>
						</ul>
						<?php the_content();
						$itemPost = carbon_get_post_meta(get_the_ID(), 'result_blocks');
						foreach ($itemPost as $item) {
							if ($item['_type'] == 'result_block') { ?>
								<div class="content__item">
									<?php echo apply_filters('the_content', $item['result_content']) ?>
								</div>
							<?php } elseif ($item['_type'] == 'result_client') { ?>
								<div class="content__item">
									<?php echo apply_filters('the_content', $item['result_client_content']) ?>
									<div class="content__item--client">
										<div class="t-20">
											<b><?php echo $item['result_client_title'] ?></b>
										</div>
										<div class="t-20">
											<?php echo $item['result_client_text'] ?>
										</div>
									</div>
								</div>
							<?php } elseif ($item['_type'] == 'result_quote') { ?>
								<div class="content__quote persone">
									<div class="content__quote--line">
										<img src="<?php echo $item['result_quote_img'] ?>" alt="<?php echo $item['result_quote_name'] ?>">
										<div class="t-12"><?php echo $item['result_quote_name'] ?></div>
									</div>
									<div class="content__quote--text">
										<?php echo $item['result_quote_text'] ?>
									</div>
								</div>
						<?php }
						}
						?>
					</div>
					<a class="btn-share" href="#"><?php echo carbon_get_theme_option('social_btn_text') ?></a>
					<?php morePosts('result', carbon_get_theme_option('more_title')) ?>
				</div>
				<div class="blog__sidebar">
					<div class="blog__sidebar--wrapper">
						<?php
						widgetSubscribe();
						widgetSign();
						?>
					</div>

				</div>
			</div>
		</div>
	</div>
	</div>
</article>