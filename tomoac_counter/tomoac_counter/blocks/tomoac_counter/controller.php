<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));

class TomoacCounterBlockController extends BlockController {

	protected $btTable = 'btTomoacCounter';
	protected $btInterfaceWidth = "600";
	protected $btInterfaceHeight = "260";
	
	public function getBlockTypeDescription() {
		return t('Access counter by tomoac');
	}
	
	public function getBlockTypeName() {
		return t('Tomoac Counter');
	}

	function view(){
//		error_log('view bid='.$this->bID,0);

		$page = Page::getCurrentPage();
		$url = BASE_URL . DIR_REL . $page->getCollectionPath();

		if(intval($this->bID) == 0)
			return;
	}

	function save( $data ) {
//		error_log('save bid='.$this->bID,0);

		$bID = $this->bID;

		parent::save($arg);
	}
}
