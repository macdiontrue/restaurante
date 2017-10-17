<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index',['categorias'=>$categorias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria = Categoria::create([
            'nome' => $request->input('nome'),
            'tipo_cozinha_id' => $request->input('tipoCozinha')
        ]);

        if ($categoria){
            return redirect()->route('categorias.show',['categoria'=>$categoria->id])
                ->with('success','Categoria registada com sucesso!');
        }

        return back()->withInput()->with('error','Erro ao registar nova categoria');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
       $categoria = Categoria::find($categoria->id);
       return view('categorias.show',['categoria'=>$categoria]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
       $categoria = Categoria::find($categoria->id);
       return view('categorias.edit',['categoria'=>$categoria]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        //save data
        $categoriaUpdate = Categoria::where('id',$categoria->id)
            ->update([
                'nome'=>$request->input('nome'),

            ]);
        if ($categoriaUpdate){
            return redirect()->route('categorias.show',['categoria'=>$categoria->id])
                ->with('success','Categoria actualizada com sucesso!');

        }

        //redirect
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        $findCategoria = Categoria::find($categoria->id);
        if ($findCategoria->delete()){
            //redirect
            return redirect()->route('categorias.index')
                ->with('success','Categoria delectada com sucesso!');

        }

        return back()->withInput()->with('error','Categoria nao foi delectada!');
    }
}
