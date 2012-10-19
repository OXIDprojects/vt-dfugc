<?php

class oxdiscountlist_dfugc extends oxdiscountlist_dfugc_parent {

	protected function _getList($oUser = null) {
		parent::_getList($oUser);

		// check if discount should be applied only to users in multiple groups at once
		$sTable = $this->getBaseObject()->getViewName();
		foreach ($this as $discount) {
			if ($discount->oxdiscount__vtdfugc->value == 1) {
				$oDb = oxDb::getDb();
				$q = "SELECT oxobjectid FROM oxobject2discount WHERE oxdiscountid = '" . $discount->getId() . "'";
				$rs = $oDb->select($q);
				while (!$rs->EOF) {
					if (!$oUser->inGroup($rs->fields[0])) {
						unset($this->_aArray[$discount->getId()]);
					}
					$rs->moveNext();
				}
			}
		}
		// resetting array pointer
		$this->rewind();

		return $this;
	}

}
