<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Contato;
use \App\Http\Requests\ContatoRequest;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contatos = Contato::all();
        return view('Contato.index')->with('contatos', $contatos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Contato.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ContatoRequest $request, Contato $contato)
    {
        $contato->nome = $request->nome;
        $contato->celular = $request->celular;
        $contato->email = $request->email;
        $contato->cep = $request->cep;
        $contato->uf = $request->uf;
        $contato->cidade = $request->cidade;
        $contato->logradouro = $request->logradouro;
        $contato->bairro = $request->bairro;
        $contato->numero = $request->numero;
        $contato->sexo = $request->sexo;
        $contato->observacao = $request->observacao;
        
        $contato->save();

        if ($contato) {
            return redirect()
                ->route('contato.index')
                ->with('success', 'Cadastro realizado com sucesso!')
            ;
        }
 
        return redirect()
            ->back()
            ->with('error', 'Falha ao realizar cadastro!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contato = Contato::find($id);
        return view('Contato.update')->with('contato', $contato);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
