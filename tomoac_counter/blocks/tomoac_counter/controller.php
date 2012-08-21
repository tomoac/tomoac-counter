<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));

class TomoacCounterBlockController extends BlockController {

	protected $btTable = 'btTomoacCounter';
	protected $btInterfaceWidth = "300";
	protected $btInterfaceHeight = "100";
	
	public function getBlockTypeDescription() {
		return t('Access counter by tomoac');
	}
	
	public function getBlockTypeName() {
		return t('Tomoac Counter');
	}

	function view() {
		error_log('view bid='.$this->bID,0);

		$db = Loader::db();
		$sql = 'UPDATE btTomoacCounter SET counter=? WHERE bid=?';
		$val = array( $this->counter+1, $this->bID);
		$db->query($sql, $val);
	}
/*
	function save( $data ) {
		parent::save($data);
	}
*/
}
