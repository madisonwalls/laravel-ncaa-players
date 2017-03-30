<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;


class PlayerController extends Controller
{
  public function index ()
  {
    //list
    //GET /Players
    $players = Player::all();
    return Response::json($players);
  }
}
