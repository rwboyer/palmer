<?php
	get_header();
?>


<div id="main" class="site-main">
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<div class="layout-medium">
				<div class="gallery-single">
					<?php
						if ( have_posts() ) :
							while ( have_posts() ) : the_post();
								?>
									<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
										<header class="entry-header">
											<h1 class="entry-title"><?php the_title(); ?></h1>
										</header>
										
										
										<div class="entry-content">
											<?php
											
												the_content();
											?>
											
											<?php
												wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'read' ), 'after' => '</div>' ) );
											?>
										</div>
										
										
										<nav class="row nav-single">
											<div class="col-sm-6 nav-previous">
												<?php
													next_post_link( '<h4>' . __( 'PREVIOUS', 'read' ) . '</h4>' . '%link', '<span class="meta-nav">&#8592;</span> %title' );
												?>
											</div>
											
											<div class="col-sm-6 nav-next">
												<?php
													previous_post_link( '<h4>' . __( 'NEXT', 'read' ) . '</h4>' . '%link', '%title <span class="meta-nav">&#8594;</span>' );
												?>
											</div>
										</nav>
									</article>
								<?php
							endwhile;
						endif;
						wp_reset_query();
					?>
				</div>
			</div>
		</div>
	</div>
</div>


<?php
	get_footer();
?>