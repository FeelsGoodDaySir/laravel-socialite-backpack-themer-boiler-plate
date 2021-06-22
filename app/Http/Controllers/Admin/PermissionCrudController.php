<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermissionCrudController extends \Backpack\PermissionManager\app\Http\Controllers\PermissionCrudController
{
    //
    public function setup()
    {
        parent::setup();
        $this->crud->enableDetailsRow();
        $this->crud->enableExportButtons();
        $this->crud->enablePersistentTable();
    }
}
