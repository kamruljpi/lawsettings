<?php

namespace kamruljpi\lawsettings\Http\Controllers;

use Illuminate\Http\Request;
use kamruljpi\admintemplate\controllers\ProjectBaseController;

class CourtController extends ProjectBaseController
{
	public function __construct() {
		$this->modelName = 'kamruljpi\lawsettings\Http\Model\Court';
		$this->formView = 'lawsettings::court.create';
	}
	public function getValidation($table = null) {
        return ['court_name' => 'required'];
    }
}