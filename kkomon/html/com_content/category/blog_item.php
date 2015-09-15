<?php
	defined('_JEXEC') or die;

	// Get image.
	$images = json_decode($this->item->images);
	if (strlen($images->image_intro) > 0)
		$img = '<img src="' . $images->image_intro . '">';
	else
		$img = '';
?>
<div class="blog-list-image"><?php echo $img; ?></div>
<div class="blog-list-info">
	<div class="blog-list-title"><a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid)); ?>"><?php echo $this->item->title; ?></a></div>
	<div class="blog-list-text"><?php echo $this->item->introtext; ?></div>
	<?php if ($this->item->params->get('show_publish_date')) : ?>
	<div class="blog-list-dt"><?php echo JHtml::_('date', $this->item->publish_up, 'j F Y'); ?></div>
	<?php endif;?>
</div>