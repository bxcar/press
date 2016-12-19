<?php
/**
 * @package Sydney
 */
?>

<article itemscope itemtype="http://schema.org/Article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<meta itemscope itemprop="mainEntityOfPage" itemType="https://schema.org/WebPage" itemid="<?php the_permalink() ?>"/> <!--Адрес главной страницы-->
	<meta itemprop="dateModified" content="<?php the_modified_time('Y-m-d')?>"/> <!--Дата последнего изменения-->

	<!--Разметка публикатора(адрес, логотип, название сайта)-->
	<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
		<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" style="display:none;">
			<span itemprop="streetAddress">Киевский шлях</span>
			<span itemprop="postalCode">08300</span>
			<span itemprop="addressLocality">Украина, Киевская обл., г.Борисполь</span>
			<span itemprop="telephone">+38 098 11 69 555</span>
		</div>
		<div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
			<img itemprop="url" itemprop="image" src="http://coralborispol.com/wp-content/themes/sydney/img/logo_coral.png" style="display:none;"/>
			<meta itemprop="width" content="100">
			<!--<meta itemprop="height" content="высота изображения логотипа">-->
		</div>
		<meta itemprop="name" content="Coral Travel - г.Борисполь">
	</div>

	<?php if ( has_post_thumbnail() && ( get_theme_mod( 'post_feat_image' ) != 1 ) ) : ?>
		<div class="entry-thumb">
			<?php the_post_thumbnail('sydney-large-thumb'); ?>
		</div>
	<?php endif; ?>

	<header class="entry-header">
		<?php the_title( '<h1 itemprop="headline" class="title-post">', '</h1>' ); ?>

		<?php if (get_theme_mod('hide_meta_single') != 1 ) : ?>
		<div class="meta-post">
			<?php sydney_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div itemprop="articleBody" class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'sydney' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php sydney_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
