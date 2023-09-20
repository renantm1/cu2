<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class RenanController extends Controller
{
    public function create()
    {
        return view('alunos.form');
    }

    public function store(Request $request)
    {
       $nome = $request->input('nome');
       $email = $request->input('email');
       $area = $request->input('area');
       $periodo = $request->input('periodo');
       

       if(\DB::insert("INSERT INTO bancocerto2 (nome,email,area,periodo) VALUES (?,?,?,?)", [$nome, $email, $area, $periodo])) {
        echo "Enviado com sucesso!!!";
       }
       else{
        echo "Ops, deu erro";
       }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}


