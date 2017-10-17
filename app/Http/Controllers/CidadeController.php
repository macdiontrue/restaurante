<?php

namespace App\Http\Controllers;

use App\Cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cidades = Cidade::all();
        return view('cidades.index',['cidades'=>$cidades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cidades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cidade = Cidade::create([
            'nome' => $request->input('nome'),
            'sigla' => $request->input('sigla')
        ]);

        if ($cidade){
            return redirect()->route('cidades.show',['categoria'=>$cidade->id])
                ->with('success','Cidade registada com sucesso!');
        }

        return back()->withInput()->with('error','Erro ao registar nova cidade');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function show(Cidade $cidade)
    {
        $cidade = Cidade::find($cidade->id);
        return view('cidades.show',['cidade'=>$cidade]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Cidade $cidade)
    {
        $cidade = Cidade::find($cidade->id);
        return view('cidades.edit',['cidade'=>$cidade]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cidade $cidade)
    {
        //save data
        $cidadeUpdate = Cidade::where('id',$cidade->id)
            ->update([
                'nome'=>$request->input('nome'),
                'sigla'=>$request->input('sigla')

            ]);
        if ($cidadeUpdate){
            return redirect()->route('cidades.show',['cidade'=>$cidade->id])
                ->with('success','Cidade actualizada com sucesso!');

        }

        //redirect
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cidade $cidade)
    {
        $findCidade = Cidade::find($cidade->id);
        if ($findCidade->delete()){
            //redirect
            return redirect()->route('cidades.index')
                ->with('success','Cidade delectada com sucesso!');

        }

        return back()->withInput()->with('error','Cidade nao foi delectada!');
    }
}
