<?php
/* Copyright (c) 1998-2009 ILIAS open source, Extended GPL, see docs/LICENSE */
require_once "Modules/DataCollection/classes/Helpers/class.ilDclCheckboxInputGUI.php";
require_once "Modules/DataCollection/classes/Fields/Boolean/class.ilDclBooleanFieldRepresentation.php";
/**
 * Class ilPHBernCurrentUserFilterFieldRepresentation
 *
 * @author  Theodor Truffer <tt@studer-raimann.ch>
 */
class ilPHBernCurrentUserFilterFieldRepresentation extends ilDclBooleanFieldRepresentation {
	/**
	 * Add filters to gui
	 * @param ilTable2GUI $table
	 *
	 * @return int
	 */
	public function addFilterInputFieldToTable(ilTable2GUI $table) {
		$input = new ilDclCheckboxInputGUI($this->lng->txt("show_only_current_user"), "filter_".$this->field->getId());

		$this->setupFilterInputField($input);
		$table->addFilterItem($input);
		$input->readFromSession();

		$value = $input->getChecked();
		return $value;
	}


	public function getInputField(ilPropertyFormGUI $form, $record_id = 0) {
		return null;
	}


}