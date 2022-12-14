<?php

namespace App\Http\Controllers;

use App\Models\money;
use Illuminate\Http\Request;

class MoneyController extends Controller
{
        public function index(){
            $data = money::all();
            return view ('money', compact('data'));
        }

        public function form(){
            $data = money::all();

            return view ('form' , compact('data'));
        }

        public function insertdata(Request $request){
            money::create($request->all());
            return redirect()->route('money')->with('success', 'Data berhasil ditambahkan');
        }

        public function tampildata($id){
            $data = money::where('id', $id)->first();
            return view ('tampildata')->with('data', $data);
        }

        public function updatedata(Request $request, $id){

            $data = money::where('id', $id)->first();
             if($request->action == 'add'){
                $total_money = $data['uang'] + $request->uang;
             }elseif($request->action == 'take'){
                if($request->uang > data['uang']){
                    return redirect (route('money'))->with('fail', 'gada saldo skipppppppp');
                }else{
                    money::where('id', $id)->update([
                        'nis' => $request->nis,
                        'nama' => $request->nama,
                        'rayon' => $request->rayon,
                    ]);
                }
             }
            $request->validate([
                'nis' => 'required',
                'nama' => 'required',
                'rayon' => 'required',
                'uang' => 'required',
            ]);

            $data = money::where('id', $id)->first();
            $data->update([
                'nis' => $request->nis,
                'nama' => $request->nama,
                'rayon' => $request->rayon,
                'uang' => $request->uang,
            ]);
            return redirect()->route ('money')->with('success', 'Data Money berhasil diupdate');
        }

        public function hapusdata($id){
            $data = money::find($id);
            $data->delete();
            return redirect()->route ('money')->with('success', 'Data Money berhasil dihapus');
        }

}
