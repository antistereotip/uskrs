
<?php
#---nema direktnog pristupa klasi---#
defined('ROOT_DIR') or exit('No direct script access allowed');
 
#---klasa engine up ng1np---#
class ng1np {
	#---javna metoda render---#
	public function render($script) {
        	$this->_require($script);
    	}
	#---zasticena metoda _require---#
    	protected function _require() {
        	require_once func_get_arg(0);
    	}
}


?>
