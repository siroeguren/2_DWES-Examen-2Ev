<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use App\Http\Requests\StoreJuegoRequest;
use App\Http\Requests\UpdateJuegoRequest;
use Illuminate\Http\Request;

class JuegoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showGames()
    {
        $games = Juego::all();
        return view('games',['games'=>$games]);
    }

    public function addGame(Request $req)
    {
        $game = new Juego;
        $game->titulo = $req->input('title');
        $game->estudio = $req->input('studio');
        $game->fecha = $req->input('date');
        $game->puntuacion = $req->input('rating');
        $game->save();
    }

    public function deleteGame($id)
    {
        $game = Juego::findOrFail($id);
        $game->delete();
        $games = Juego::all();
        return view('games',['games'=>$games]);
    }


    public function gameFilter(Request $req)
    {
        $games = Juego::where('puntuacion', '>=' , $req->input('puntuacion'))->get();
        return view('games',['games'=>$games]);
    }



    public function show(Juego $juego)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Juego $juego)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJuegoRequest $request, Juego $juego)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Juego $juego)
    {
        //
    }
}
