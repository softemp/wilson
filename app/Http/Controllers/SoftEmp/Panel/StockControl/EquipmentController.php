<?php

namespace App\Http\Controllers\Softemp\Panel\StockControl;


use App\Models\StockControl\Equipment;
use App\Models\StockControl\equipmentDestination;
use App\Models\StockControl\EquipmentModel;
use Illuminate\Http\Request;
use App\Http\Controllers\SoftEmp\Panel\CrudController;

class EquipmentController extends CrudController
{
    protected $model;
    protected $pathView;
    protected $groupRoute;

    private $equipmentModel;

    public function __construct(Equipment $equipment, equipmentDestination $equipmentDestination, EquipmentModel $equipmentModel)
    {
        $this->model = $equipment;
        $this->pathView = 'softemp.panel.stockcontrol.equipment.';
        $this->groupRoute = 'panel.stockcontrol.equipment';
        $this->equipmentModel = $equipmentModel;
    }

    public function create()
    {
        $data = $this->equipmentModel->all();

        return view($this->pathView.'create', compact('data'));
    }

    public function giveback(Request $request)
    {
        $this->model->upStatus($request->equipmentid, 1);

        return redirect()->route('orderouts.show', $request->orderid)->with('success', 'Equipamento devolvido');

    }

    public function equipDown(Request $request)
    {
        $this->model->upStatus($request->equipmentid, 3);

        $this->destination->create
        ([
            'equipmentId'   =>  $request->equipmentid,
            'orderOutId'    =>  $request->orderid,
            'destination'   =>  $request->destination
        ]);

        return redirect()->route('orderouts.show', $request->orderid)->with('success', 'Destinado');
    }

    public function inuse()
    {
        $equipments = $this->equipment->where('equipment_status', 3)->get();

        return view('equipments.inuse', compact('equipments'));
    }

    public function putStock($id)
    {
        $this->model->putStock($id);

        return redirect()->route($this->groupRoute.'.index')->with('success', 'Equipamento de volta ao estoque');

    }

    public function putTrash($id)
    {
        $this->model->putTrash($id);

        return redirect()->route($this->groupRoute.'.index')->with('success', 'Equipamento movido para o lixo');
    }

    public function showInTrash()
    {
        $equipments = $this->equipment->where('equipment_status', 4)->get();

        return view('equipments.intrash', compact('equipments'));
    }
}
