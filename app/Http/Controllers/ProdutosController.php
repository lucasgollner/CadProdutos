<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;
use Validator;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()->json(Produto::all(),200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();

        $validator = Validator::make($input, [
            'nome' => 'required',
            'valor' => 'required',
            'tipo_produto' => 'required'
        ]);

        if($validator->fails()){
            return response()->json(["msg"=>$validator->errors()], 400);       
        }

        $produto = Produto::create($input);

        return response()->json(["msg"=>"Produto criado!","id"=>$produto->id],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $produto = Produto::find($id);

        if($produto)
            return response()->json($produto,200);
        else
            return response()->json(["msg"=>"Produto não encontrado!"],404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $input = $request->all();

        $produto = Produto::find($id);
        if($produto){
            $produto->fill($input);
            $produto->save();
            return response()->json(["msg"=>"Produto atualizado!"],200);
        }else{
            return response()->json(["msg"=>"Produto não encontrado!"],404);
        }

        return $this->sendResponse($product->toArray(), 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $produto = Produto::find($id);
        if($produto){
            $produto->delete();
            return response()->json(["msg"=>"Produto DELETADO!","id"=>$id],202);
        }else{
            return response()->json(["msg"=>"Produto não encontrado!"],404);
        }

    }
}
