<?php
	defined('_JEXEC') or die;
	JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');
	JHtml::_('behavior.caption');
	$h = (isset($this->parent) and $this->parent->id != 'root') ? $this->parent->title : $this->params->get('page_heading');
?>
<h1><?php echo $this->escape($h); ?></h1>
<div class="blog-list">
	<?php if (!empty($this->lead_items)) : ?>
		<?php $leadingcount = 0; ?>
		<?php foreach ($this->lead_items as &$item) : ?>
			<div class="blog-list-item">
				<?php
					$this->item = & $item;
					echo $this->loadTemplate('item');
				?>
			</div>
			<?php $leadingcount++; ?>
		<?php endforeach; ?>
	<?php endif; ?>
	<?php if (($this->params->def('show_pagination', 1) == 1 || ($this->params->get('show_pagination') == 2)) && ($this->pagination->get('pages.total') > 1)) : ?>
		<?php echo $this->pagination->getPagesLinks(); ?>
	<?php endif; ?>
</div>

	

