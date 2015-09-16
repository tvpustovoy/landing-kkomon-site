<?php
	defined('_JEXEC') or die;

	if ($module->showtitle)
	{
		$p = json_decode($module->params);
		if (isset($p->header_class) and strlen($p->header_class) > 0)
			echo '<h1><a href="' . $p->header_class . '">' . $module->title . '</a></h1>';
		else
			echo '<h1>' . $module->title . '</h1>';
	}
	else
		echo '';

	function getImage($article)
	{
		if (isset($article->images))
		{
			$data = json_decode($article->images);
			if (isset($data->image_intro) and strlen($data->image_intro) > 0)
				return '<img src="' . $data->image_intro . '">';
		}
		return '';
	}
?>
<ul>
<?php foreach ($list as $item) : ?>
	<li>
		<div class="main-news-image">
			<a class="main-news-image-container" href="<?php echo $item->link; ?>"><?php echo getImage($item); ?></a>
		</div>
		<div class="main-news-info">
			<div class="main-news-dt"><?php echo JHtml::_('date', $item->publish_up, 'j F Y'); ?></div>
			<div class="main-news-title">
				<a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a>
			</div>
		</div>
	</li>
<?php endforeach; ?>
</ul>
