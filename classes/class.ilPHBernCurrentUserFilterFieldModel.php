<?php
/* Copyright (c) 1998-2009 ILIAS open source, Extended GPL, see docs/LICENSE */
require_once("./Modules/DataCollection/classes/Fields/Boolean/class.ilDclBooleanFieldModel.php");

/**
 * Class ilPHBernCurrentUserFilterFieldModel
 *
 * @author  Theodor Truffer <tt@studer-raimann.ch>
 */
class ilPHBernCurrentUserFilterFieldModel extends ilDclBooleanFieldModel {
	/**
	 * @inheritDoc
	 */
	public function getRecordQueryFilterObject($filter_value = "", ilDclBaseFieldModel $sort_field = NULL) {
		global $DIC;
		$ilUser = $DIC['ilUser'];
		$ilDB = $DIC['ilDB'];

		if ($filter_value == "1") {
			$sql_obj = new ilDclRecordQueryObject();
			$sql_obj->setWhereStatement(' AND record.owner = ' . $ilDB->quote($ilUser->getId()));
			return $sql_obj;
		}
		return null;
	}


	public function getExportable() {
		return false;
	}
}