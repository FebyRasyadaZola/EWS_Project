<?php

namespace App\Http\Controllers;
use DB;

use App\Models\User;
use Illuminate\Http\Request;


class chartcontroller extends Controller
{
    public function Line_W(){
        // $result = DB::select(DB::raw("SELECT id_node.Waktu,sum(id_node.idnode) as WaterLevel FROM `id_node` GROUP BY id_node.WaterLevel;"));
        // $data = "";
        // foreach($result as  $val){
        //     $data.="['".$val->Waktu."',".$val->WaterLevel."],";
        // }
        // dd($data);
        return view('grafik_WL');
       
    }
    public function Line_T(){
        // $result = DB::select(DB::raw("SELECT id_node.Waktu,sum(id_node.idnode) as Temperature FROM `id_node` GROUP BY id_node.Temperature;"));
        // $data = "";
        // foreach($result as  $val){
        //     $data.="['".$val->Waktu."',".$val->Temperature."],";
        // }
        // dd($data);
        return view('grafik_T');
       
    }
    public function Line_H(){
        // $result = DB::select(DB::raw("SELECT id_node.Waktu,sum(id_node.idnode) as Humidity FROM `id_node` GROUP BY id_node.Humidity;"));
        // $data = "";
        // foreach($result as  $val){
        //     $data.="['".$val->Waktu."',".$val->Humidity."],";
        // }
        // dd($data);
        return view('grafik_H');
       
    }
}