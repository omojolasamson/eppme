<?php

namespace App\Http\Controllers;

/*use Request;*/
use App\Ping;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PingController extends Controller
{

    public $long;
    public $lat;
    public $id;
    public $token;
    public function getPostAdd($longitude, $latitude){

        $this->long = $longitude;
        $this->lat = $latitude;
        $this->token = hash_hmac('sha256', str_random(40), config('app.key'));
        $ping = new Ping();
        $ping->longitude = $this->long;
        $ping->latitude = $this->lat;
        $ping->token = $this->token;


        if (Auth::check())
        {
            $this->id = Auth::user()->getId();
            $ping->user_id = $this->id;
            Auth::user()->pings()->save($ping);
        }
        $ping_id = DB::table('pings')->where('token', $this->token)->pluck('id');

        return view('form', compact('ping_id'));

    }

    public function postForm(Request $request){
        $pingId = $request->input('ping_id');

        $ping = Ping::findOrFail($pingId);
        $ping->title = $request->input('title');
        $ping->user_id = Auth::user()->id;
        $ping->description = $request->input('description');
        $ping->organization = $request->input('organization');

        $ping->save();
        $key = 1;
        return view('messageBoard', compact('key'));
    }

    public function getPingView(){

        $pings = DB::table('pings')->where('user_id', Auth::user()->getId())->get();
        return view('pingView', compact('pings'));

    }

    public function getAllPing(){
        $pings = DB::table('pings')
            ->join('users', 'user_id', '=', 'users.id')
            ->select('pings.*', 'users.first_name', 'users.last_name')
            ->get();
            $key = 1;
        return view('pingView', compact('pings', 'key'));
    }

    public function getFullPing($id){
        if (Auth::user()->role_id < 12){
            $ping = Ping::find($id);
            $ping->status = 'SEEN BY ADMIN';
            $ping->save();
        }
        $details = DB::table('pings')->where('pings.id', $id)
            ->join('users', 'user_id', '=', 'users.id')
            ->select('pings.*', 'users.first_name', 'users.last_name')
            ->get();
        return view('fullPingView', compact('details'));
    }

    public function getDeletePing($id){
        DB::table('pings')->where('pings.id', $id)->delete();

        $key = 2;
        return view('messageBoard', compact('key'));

    }


}
