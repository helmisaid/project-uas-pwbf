<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Satuan;

class SatuanController extends Controller
{
    public function index()
    {
        $sb_menu = "master";
        $sb_submenu = "satuan";
        $satuans = Satuan::all();
        return view('admin.master.satuan.index', compact('satuans','sb_menu','sb_submenu'));
    }

    public function create()
    {
        $sb_menu = "master";
        $sb_submenu = "satuan";
        return view('admin.master.satuan.create' , compact('sb_menu','sb_submenu'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_satuan' => 'required',
        ]);

        Satuan::create($request->all());

        return redirect()->route('satuan')
                        ->with('success','Satuan created successfully.');
    }

  

    public function edit(Satuan $satuan)
    {
        $sb_menu = "master";
        $sb_submenu = "satuan";
        return view('admin.master.satuan.edit',compact('satuan','sb_menu','sb_submenu'));
    }

    public function update(Request $request, Satuan $satuan)
    {
        $request->validate([
            'nama_satuan' => 'required',
        ]);

        $satuan->update($request->all());

        return redirect()->route('satuan')
                        ->with('success','Satuan updated successfully');
    }

    public function destroy(Satuan $satuan)
    {
        $satuan->delete();

        return redirect()->route('satuan')
                        ->with('success','Satuan deleted successfully');
    }
}
