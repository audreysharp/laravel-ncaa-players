<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class PlayerController extends Controller
{
    public function index() {
        // list something - GET /players
        $players = Player::all();
        return Response::json($players);
    }

    public function create(Request $request) {
        // create new player - POST /players
        // DB::table('players')->insert();
        Player::create($request->all()); // create a new player object
        return Response::json(['created' => true]);
    }

    public function show($id) {
        // show a single player info - GET /players/$id
        $player = Player::find($id); // get single record back
        return Response::json($player);
    }

    public function update(Request $request, $id) {
        // update a single player - PUT /players/$id
        $player = Player::find($id);
        $player->update($request->all());
        return Response::json(['updated' => true]);
    }

    public function destroy($id) {
        // remove a single player -  DELETE /players/$id
        $player = Player::find($id);
        $player->delete();
        return Response::json(['deleted' => true]);
    }
}
