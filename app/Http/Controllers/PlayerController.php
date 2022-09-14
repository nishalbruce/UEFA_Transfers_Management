<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    //
    public function index(){
        $players = Player::all();
        // $players = [
        //     1=>"Player number 1",
        //     2=>"Player number 2",
        //     3=>"Player number 3",
        //     4=>"Player number 4",
        //     5=>"Player number 5",
        // ];
        return view('players',['player1'=>$players]);
    }

    public function detail($pk){
        // $players = [
        //         1=>"Player number 1",
        //         2=>"Player number 2",
        //         3=>"Player number 3",
        //         4=>"Player number 4",
        //         5=>"Player number 5",
        // ];
        // $players = $players[$pk] ?? 'Aucune clé';
        $player= Player::findOrFail($pk);
        return view('player_detail',['player'=>$player]);
    }

    public function edit($pk){
        
        $player= Player::findOrFail($pk);
        return view('edit',['players'=>$player]);
    }

    public function update(Request $request, $pk)
    {
        $player = Player::findOrFail($pk);
        $player->fname=$request->input('f_name');
        $player->lname=$request->input('l_name');
        $player->height=$request->input('height');
        $player->weight=$request->input('weight');
        $player->position=$request->input('position');
        $player->number=$request->input('number');
        $player->birth_year=$request->input('year_birth');
        $player->photo=$request->input('photo');
        $player->update();

    }

    public function delete(Request $request, $pk){
        
    }
}
