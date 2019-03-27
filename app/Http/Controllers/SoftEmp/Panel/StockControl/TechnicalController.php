<?php

namespace App\Http\Controllers\Softemp\Panel\StockControl;

use App\Models\StockControl\Technical;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TechnicalController extends Controller
{
    private $technical;

    public function __construct(Technical $technical)
    {
        $this->technical = $technical;
    }

    public function index()
    {
        $technicals = $this->technical->all();
        return view('technicals.index',compact('technicals'));
    }

    public function create()
    {
        return view('technicals.register');
    }

    public function store(Request $request)
    {
        $this->technical->create($request->all());
        return redirect()->route('technicals.index')->with('success', 'Registro criado com sucesso.');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $technical = $this->technical->find($id);

        return view('technicals.edit', compact('technical'));
    }

    public function update(Request $request, $id)
    {
        $this->technical->find($id)->update([
            'name' => $request->name,
            'fone' => $request->fone
        ]);
        return redirect()->route('technicals.index')->with('success', 'Registro alterado com sucesso.');
    }

    public function destroy($id)
    {
        $result = $this->technical->find($id)->delete();

        return redirect()->route('technicals.index')->with('success', 'Excluído com sucesso.');
    }


}
