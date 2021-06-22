<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserCrudController extends \Backpack\PermissionManager\app\Http\Controllers\UserCrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\CloneOperation;
    
	public function setup()
    {
        parent::setup();
        $this->crud->enableDetailsRow();
        $this->crud->enableExportButtons();
        $this->crud->enablePersistentTable();
        
    }
}
