<?php
/* Copyright (c) 1998-2009 ILIAS open source, Extended GPL, see docs/LICENSE */
require_once "Modules/DataCollection/classes/Fields/Boolean/class.ilDclBooleanRecordFieldModel.php";

/**
 * Class ilPHBernCurrentUserFilterRecordFieldModel
 *
 * @author  Theodor Truffer <tt@studer-raimann.ch>
 */
class ilPHBernCurrentUserFilterRecordFieldModel extends ilDclBooleanRecordFieldModel {

	public function setValue($value, $omit_parsing = false) {
		return;
	}


	public function setValueFromForm($form) {
		return;
	}
}