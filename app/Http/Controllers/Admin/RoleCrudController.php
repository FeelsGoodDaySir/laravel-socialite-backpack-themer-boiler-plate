<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleCrudController extends \Backpack\PermissionManager\app\Http\Controllers\RoleCrudController
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
