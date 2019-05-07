<?php

namespace App\Http\Controllers\Softemp\Panel\StockControl;


use App\Http\Controllers\SoftEmp\Panel\CrudController;
use App\Models\StockControl\Equipment;
use App\Models\StockControl\OrderOut;
use App\Models\StockControl\Technical;
use Illuminate\Http\Request;

class OrderOutController extends CrudController
{
    private $equipment;
    private $technical;

    public function __construct(OrderOut $orderOut, Equipment $equipment, Technical $technical)
    {
        $this->equipment = $equipment;
        $this->technical = $technical;

        $pathView = 'softemp.panel.stockcontrol.orders';
        $groupRoute = 'panel.stockcontrol.order';

        parent::__construct($orderOut, $groupRoute, $pathView);
    }

    public function index()
    {
        $this->model = $this->model->openOrders();

        return parent::index(); // TODO: Change the autogenerated stub
    }

    public function create()
    {
        $this->arrayData['equipments'] = $this->equipment->showStock()->pluck('ns', 'id');
        $this->arrayData['technicals'] = $this->technical->all()->pluck('name', 'id');
        return parent::create(); // TODO: Change the autogenerated stub
    }

    public function store(Request $request)
    {
        if ($this->checkTechnicianWithPendingOrders($request->technical_id)){
            return $this->redirect('index', ['error' => 'Técnico possui equipamentos pendentes, necessário receber os equipamentos para abrir nova ordem']);
        }

        $orderId = $this->model->create(['technical_id'=>$request->technical_id]);

        foreach ($request->equipment_id as $id)
        {
            $orderId->equipment()->attach($id);
            $this->equipment->putOrder($id);
        }

        return $this->redirect('index', ['success' => 'registro criado com sucesso!']);
    }

    public function show($id)
    {
        $order = $this->model->find($id);
        $countEquipment = count($order->equipmentWithTechnical());
        if ($countEquipment == 0){
            $this->arrayData['close'] = true;
        }else{
            $this->arrayData['close'] = false;
        }
        return parent::show($id); // TODO: Change the autogenerated stub
    }

    public function closeOrder($id)
    {
        $this->model->closeOrder($id);

        return redirect()->route($this->groupRoute.'.index')->with(['success' => 'Ordem finalizada']);
    }

    public function assignEquipment(Request $request)
    {
        $order = $this->model->orderEquipmentDestination()->create([
            'equipment_id' => $request->equipment_id,
            'order_out_id' => $request->order_out_id,
            'destination' => $request->destination
        ]);
        $equipment = $this->equipment->putClient($request->equipment_id);
        $orderId = $request->order_out_id;

        if ($order && $equipment){
            return $this->redirect('show', ['success' => 'Equipamento destinado com sucesso'], $orderId);
        }

        return $this->redirect('show', ['error' => 'Algo deu errado!'], $orderId);
    }

    /**
     * Recebe o id do técnico, verifica as ordens abertas se expiraram.
     *
     * @param $technical_id
     * @return \Illuminate\Http\RedirectResponse
     */
    private function checkTechnicianWithPendingOrders($technical_id)
    {
        $checkOpenOrders = $this->model->where(['technical_id' => $technical_id, 'status' => '1'])->get();

        foreach ($checkOpenOrders as $openOrder){
            if ($this->model->checkExpiration($openOrder->created_at)){
                return true;
            }
        }
    }

//    public function update(Request $request, $id)
//    {
//        $this->orderOut->upStatus($id, 2);
//        return redirect()->route('home')->with('success', 'Ordem fechada com sucesso');
//    }

    public function closedorders()
    {
        $os = $this->model->where('status', 2)->get();
        $this->arrayData['data'] = $os;
        return view("$this->pathView.index", $this->arrayData);
    }

    public function print($id)
    {
        $this->arrayData['data'] = $this->model->find($id);

        return view("$this->pathView.print", $this->arrayData);
    }

//
//    public function showclosed($id)
//    {
//        $order = $this->orderOut->find($id);
//        return view('orderouts.showclosed', compact('order'));
//    }
}
