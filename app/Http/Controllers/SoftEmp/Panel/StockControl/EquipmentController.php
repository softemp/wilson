<?php

namespace App\Http\Controllers\Softemp\Panel\StockControl;


use App\Models\StockControl\Equipment;
use App\Models\StockControl\EquipmentDestination;
use App\Models\StockControl\EquipmentModel;
use Illuminate\Http\Request;
use App\Http\Controllers\SoftEmp\Panel\CrudController;

class EquipmentController extends CrudController
{

    private $equipmentModel;
    private $destination;
    private $equipment;

    public function __construct(Equipment $equipment, equipmentDestination $equipmentDestination, EquipmentModel $equipmentModel)
    {
        $pathView = 'softemp.panel.stockcontrol.equipment.';
        $groupRoute = 'panel.stockcontrol.equipment';

        $this->equipment = $equipment;
        $this->equipmentModel = $equipmentModel;
        $this->destination = $equipmentDestination;

        parent::__construct($equipment, $groupRoute, $pathView);
    }

    public function create()
    {
        $this->arrayData['equipmentModels'] = $this->equipmentModel->all()->pluck('name', 'id');

        return parent::create(); // TODO: Change the autogenerated stub
    }

    public function giveback(Request $request)
    {
        $this->equipment->upStatus($request->equipmentid, 1);

        return redirect()->route('orderouts.show', $request->orderid)->with('success', 'Equipamento devolvido');

    }

    public function equipDown(Request $request)
    {
        $this->equipment->upStatus($request->equipmentid, 3);

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

    public function putStock()
    {
        $equipmentId = $_POST['equipmentid'];

        $return = $this->equipment->putStock($equipmentId);

        return response()->json($return);

//        $this->equipment->putStock($data->equipmentId);

//        return redirect()->route('panel.stockcontrol.order.view.', $data->orderid)->with('success', 'Equipamento de volta ao estoque');

    }

    public function putTrash(Request $request)
    {
        $resposta = $this->model->putTrash($request->equipment_id);

        return response()->json($resposta);
    }

    public function showInTrash()
    {
        $equipments = $this->equipment->where('equipment_status', 4)->get();

        return view('equipments.intrash', compact('equipments'));
    }

    public function store(Request $request)
    {
        $request['status'] = 1;
        $request = $this->model->validateMacNs($request);

        return parent::store($request); // TODO: Change the autogenerated stub
    }

    public function update(Request $request, $id)
    {
        $request = $this->model->validateMacNs($request);

        return parent::update($request, $id); // TODO: Change the autogenerated stub
    }

    public function barCodeSearch(Request $request)
    {
        $barCode = $request->equipmentBarCode;
        $response = $this->model->where('ns', $barCode)->get()->first();

        $resposta = ['resposta' => $response, 'requerido' => $barCode];

        if ($response){
            return response()->json($response);
        }
        return response()->json(false);

    }
}
