<?php

namespace App\Http\Controllers\SoftEmp\Panel\Base\AccessControl;

use App\Http\Controllers\SoftEmp\Panel\CrudController;
use App\Models\Base\AccessControl\Role;
use Illuminate\Http\Request;

class RoleController extends CrudController
{


    public function __construct(Role $role)
    {
        $this->model = $role;
        //$this->request = $request;
        $this->pathView = 'softemp.panel.base.accesscontrol.role';
        $this->groupRoute = 'panel.access.control.role';
    }

    public function store(Request $request)
    {
       $request['slug'] = $request->name;

        return parent::store($request); // TODO: Change the autogenerated stub
    }
}
