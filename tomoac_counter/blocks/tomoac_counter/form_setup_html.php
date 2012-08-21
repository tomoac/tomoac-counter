<?php  defined('C5_EXECUTE') or die(_("Access Denied."));

	$form = Loader::helper('form');
?>

<div id="ccm-counter-tab">
	<br /><table>
	<tr><td>カウンター値</td>  <td><?php echo $form->text('counter', $counter) ?></td></tr>
	<tr><td>カウンター桁数</td><td><?php echo $form->text('options', $options) ?></td></tr>
	</table>
</div>
