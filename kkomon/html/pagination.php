<?php
	defined('_JEXEC') or die('Restricted access');

	function pagination_list_render($list)
	{
		$html = '<div class="pagination"><ul>';
		foreach ($list['pages'] as $item)
		{
			$active = $item['active'] ? '' : ' active';
			$html .= '<li class="pagination-item' . $active . '">' . $item['data'] . '</li>';
		}
		$html .= '</ul></div>';
		return $html;
	}
?>