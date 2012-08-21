<?php  defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<?php
	if($options > 16)
		$options = 16;
	echo sprintf("%0".$options."s", $counter);
?>
