<?php 
	$preview_image = get_field('preview_image');
	if( !empty( $preview_image ) ): ?>
		<img src="<?php echo esc_url($preview_image['url']) ?>" alt="<?php echo esc_attr($preview_image['alt']); ?>" />
	<?php endif; ?>

	<?php 
	$title = get_field('title');
	if( !empty( $title ) ): ?>
		<h1 class="title"><?php echo $title ?></h1>
	<?php endif; ?>

	<?php 
	$image = get_field('main_image');
	if( !empty( $image ) ): ?>
 		<img src="<?php echo esc_url($image['url']) ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	<?php endif; ?>

	<?php 
	$main_video = get_field('main_video');
	if( empty( $image ) and !empty( $main_video ) ): ?>

		<?php echo $main_video ?>
	
	<?php endif; ?>

	<?php 
	$feature_text = get_field('feature_text');
	if( !empty( $feature_text ) ): ?>
		<p class="featureText"><?php echo $feature_text ?></p>
	<?php endif; ?>

	<?php 
	$description_text = get_field('description_text');
	if( !empty( $description_text ) ): ?>
		<p class="descriptionText"><?php echo $description_text ?></p>
	<?php endif; ?>

	<?php 
	$secondary_images = get_field('secondary_images');
	if( !empty( $secondary_images ) ): 

		foreach ($secondary_images as & $secondary_image) {?>
			<img src="<?php echo esc_url($secondary_image['url']) ?>" alt="<?php echo esc_attr($secondary_image['alt']); ?>" />
		<?php } ?>
	<?php endif; ?>