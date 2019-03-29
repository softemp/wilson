<?php

namespace App\Http\Controllers\SoftEmp\Panel\Base\AccessControl;

use App\Http\Controllers\SoftEmp\Panel\CrudController;
use App\Models\Base\AccessControl\Module;
use App\Models\Base\AccessControl\Permission;
use Illuminate\Http\Request;

class PermissionController extends CrudController
{
    private $module;

    public function __construct(Permission $permission, Module $module)
    {
        $pathView = 'softemp.panel.base.access_control.permission';
        $groupRoute = 'panel.access.control.permission';

        $this->module = $module;

        parent::__construct($permission, $groupRoute, $pathView);
    }

    public function create()
    {
        $this->arrayData['modules'] = $this->module->all();
        $this->arrayData['permissions'] = $this->model->all();

        return parent::create(); // TODO: Change the autogenerated stub
    }

}
