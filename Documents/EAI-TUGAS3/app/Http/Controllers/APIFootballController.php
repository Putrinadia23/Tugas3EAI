<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class APIFootballController extends Controller
{
    public function index(){
        $client = new Client();
        $response = $client->get(config('app.APIURL.API_URL'). "/?action=get_leagues&country_id=44&APIkey=". config('app.APIURL.API_KEY'));
        $league = json_decode($response->getBody()->getContents());

        return view('dashboard', compact('league'));  
    }
    
    public function teams(string $leagueId){
        $client = new Client();
        $response = $client->get(config('app.APIURL.API_URL'). "/?action=get_teams&league_id=". $leagueId ."&APIkey=". config('app.APIURL.API_KEY'));
        $teams = json_decode($response->getBody()->getContents());
        
        return view('teams', compact('teams'));  
    }
    
    public function standings(string $leagueId){
        $client = new Client();
        $response = $client->get(config('app.APIURL.API_URL'). "/?action=get_standings&league_id=". $leagueId. "&APIkey=". config('app.APIURL.API_KEY'));
        $standings = json_decode($response->getBody()->getContents());
        if(!is_array($standings)){
            return redirect()->back()->with('error', "it's not a league, it's a competitions event");
        }
        return view('standings', compact('standings'));  
    }
}
