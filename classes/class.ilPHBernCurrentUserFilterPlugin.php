<?php
/* Copyright (c) 1998-2009 ILIAS open source, Extended GPL, see docs/LICENSE */
require_once "Modules/DataCollection/classes/Fields/Plugin/class.ilDclFieldTypePlugin.php";

/**
 * Class ilPHBernCurrentUserFilterPlugin
 *
 * @author  Theodor Truffer <tt@studer-raimann.ch>
 */
class ilPHBernCurrentUserFilterPlugin extends ilDclFieldTypePlugin  {

	function getPluginName() {
		return "PHBernCurrentUserFilter";
	}
}