<?php
	defined('_JEXEC') or die;
	
	function getImage1($article)
	{
		if (isset($article->images))
		{
			$data = json_decode($article->images);
			if (isset($data->image_intro) and strlen($data->image_intro) > 0)
			    return $data->image_intro;
				//return '<img src="' . $data->image_intro . '">';
		}
		return '';
	}
	$n = min(3, count($list));
?>
<?php  ?>
<div class="slider-container">
	<div id="slider" class="slider">
		<div class="slider-image">
			<?php for ($i=0; $i<$n; $i++) : ?>
			<img src="<?php echo getImage1($list[$i]); ?>" alt="" id="slider<?php echo $i+1; ?>" <?php if ($i==0) echo 'class="active"'; ?> />
			<?php endfor; ?>
		</div>
		<div class="slider-tabs">
			<?php for ($i=0; $i<$n; $i++) : ?>
			<div class="slider-tab<?php if ($i==0) echo ' active'; ?>" data-target="slider<?php echo $i+1; ?>">
				<div class="slider-tab-inner">
					<div class="slider-tab-inner-text">
						<a href="<?php echo $list[$i]->link; ?>"><?php echo $list[$i]->title; ?></a>
						<div class="slider-dt"><?php echo JHtml::_('date', $list[$i]->publish_up, 'j F Y'); ?></div>
					</div>
				</div>
				<div class="slider-tab-inner-helper"></div>
			</div>
			<?php endfor; ?> 
		</div>
	</div>
</div>
