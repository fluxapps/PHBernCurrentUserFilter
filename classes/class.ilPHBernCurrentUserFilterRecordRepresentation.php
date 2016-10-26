<?php
/* Copyright (c) 1998-2009 ILIAS open source, Extended GPL, see docs/LICENSE */
require_once "Modules/DataCollection/classes/Fields/Base/class.ilDclBaseRecordRepresentation.php";
/**
 * Class ilPHBernCurrentUserFilterRepresentation
 *
 * @author  Theodor Truffer <tt@studer-raimann.ch>
 */
class ilPHBernCurrentUserFilterRecordRepresentation extends ilDclBaseRecordRepresentation {

	public function getSingleHTML(array $options = NULL, $link = true) {
		return false;
	}


	public function getConfirmationHTML() {
		return false;
	}
}