<?php  defined('C5_EXECUTE') or die(_("Access Denied."));

	$form = Loader::helper('form');
	$db = Loader::db();
?>
<ul class="ccm-dialog-tabs" id="ccm-counter-tabs">
	<li><a href="javascript:void(0)" id="ccm-button-option"><?php   echo t('Option')?></a></li>
</ul>

<div id="ccm-counter-tab">
<?php
	echo '<br /><table>';
	echo '<tr><td>'.'カウンター値'.'</td><td>'.'&nbsp;'.$form->text('counter', $twitter_user)."</td></tr>";
	echo '<tr><td>'.'カウンター桁数'.'</td><td>'.$form->text('counterofdigit', '1', $twitter_count)."</td></tr>";
	echo '</table>';
?>
</div>

</div>
