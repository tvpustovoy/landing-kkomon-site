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

	echo $module->content;
?>