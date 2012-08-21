<?php
defined('C5_EXECUTE') or die(_("Access Denied."));

class TomoacCounterPackage extends Package {

     protected $pkgHandle = 'tomoac_counter';
     protected $appVersionRequired = '5.4.0';
     protected $pkgVersion = '0.1.0';

     public function getPackageDescription() {
          return t('Access counter by tomoac');
     }

     public function getPackageName() {
          return t('Tomoac counter');
     }

     public function install() {
          $pkg = parent::install();

          // install block 
          BlockType::installBlockTypeFromPackage('tomoac_counter', $pkg); 
     }
}
?>