<?php

namespace App\Http\Controllers\Softemp\Panel\StockControl;


use App\Models\StockControl\Equipment;
use App\Models\StockControl\EquipmentDestination;
use App\Models\StockControl\EquipmentModel;
use App\Models\StockControl\OrderOutEquipment;
use Illuminate\Http\Request;
use App\Http\Controllers\SoftEmp\Panel\CrudController;

class EquipmentController extends CrudController
{

    private $equipmentModel;
    private $destination;

    public function __construct(Equipment $model , Request $request, equipmentDestination $equipmentDestination, EquipmentModel $equipmentModel)
    {
        $pathView = 'softemp.panel.stockcontrol.equipment.';
        $groupRoute = 'panel.stockcontrol.equipment';

        $this->equipmentModel = $equipmentModel;
        $this->destination = $equipmentDestination;

        parent::__construct($model, $request, $groupRoute, $pathView);
    }

    public function create()
    {
        $this->arrayData['equipmentModels'] = $this->equipmentModel->all()->pluck('name', 'id');

        return parent::create(); // TODO: Change the autogenerated stub
    }

    public function giveback()
    {
        $this->model->upStatus($this->request->equipmentid, 1);

        return redirect()->route('orderouts.show', $this->request->orderid)->with('success', 'Equipamento devolvido');

    }

    public function equipDown()
    {
        $this->model->upStatus($this->request->equipmentid, 3);

        $this->destination->create
        ([
            'equipmentId'   =>  $this->request->equipmentid,
            'orderOutId'    =>  $this->request->orderid,
            'destination'   =>  $this->request->destination
        ]);

        return redirect()->route('orderouts.show', $this->request->orderid)->with('success', 'Destinado');
    }

    public function inuse()
    {
        $equipments = $this->model->where('equipment_status', 3)->get();

        return view('equipments.inuse', compact('equipments'));
    }

    public function putStockFromOrder(OrderOutEquipment $orderOutEquipment)
    {
        $return = $this->model->putStock($this->request->equipmentId);
        $return2 = $orderOutEquipment->updateStatus($this->request->pivotId);
        if ($return && $return == true){
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }

    public function putStock()
    {
        $equipmentId = $this->request->equipmentid;
        $return = $this->model->putStock($equipmentId);

        return response()->json($return);
    }

    public function putTrash()
    {
        $resposta = $this->model->putTrash($this->request->equipment_id);

        return response()->json($resposta);
    }

    public function showInTrash()
    {
        $equipments = $this->model->where('equipment_status', 4)->get();

        return view('equipments.intrash', compact('equipments'));
    }

    public function store()
    {
        $request['status'] = 1;
        $request = $this->model->validateMacNs($this->request);

        return parent::store(); // TODO: Change the autogenerated stub
    }

    public function update($id)
    {
        $request = $this->model->validateMacNs($this->request);

        return parent::update($id); // TODO: Change the autogenerated stub
    }

    public function barCodeSearch()
    {
        if (strlen($this->request->equipmentBarCode) > 5){
            $barCode = $this->request->equipmentBarCode;
            $response = $this->model->where('ns', 'Like','%' . $barCode . '%')->first();
            if ($response){
                $response['name'] = $response->equipmentModel->name;
                return response()->json($response);
            }
        }
        return response()->json(false);
    }
}
