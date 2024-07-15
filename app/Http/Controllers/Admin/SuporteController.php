<?php

namespace app\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Suporte;
use Illuminate\Http\Request;

class SuporteController extends Controller
{
    public function index(Suporte $suporte) 
    {
        
        $lista_suportes = $suporte->all();
        //dd($lista_suportes);//DEBUG
        
        return view('admin/suporte/index', [
            'lista_suportes' => $lista_suportes
        ]);
    }
    
    public function show(string|int $id)
    {
        //Suporte::find($id)
        //Suporte::where('id', $id)->first();
        //Suporte::where('id','!=', $id)->first();
        if(!$suporte = Suporte::find($id)) {
            return back();
        }
        
        return view('admin/suporte/show', compact('suporte'));
    }
    
    public function create() 
    {
        return view('admin/suporte/create');
    }
    
    public function store(Request $request, Suporte $suporte) 
    {
        $data = $request->all();
        $data['status'] = 'a';
        
        $suporte = $suporte->create($data);
        return redirect()->route('suporte.index');
    }
}
