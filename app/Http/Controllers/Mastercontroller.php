<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class Mastercontroller extends Controller
{
    public function mastermahasiswa() {
        $sb_menu = "mahasiswa";
        $sb_submenu = "mastermahasiswa";

        if(!session()->has('mahasiswa')) {
            session()->put('mahasiswa', array());
        }

        $mahasiswa = Mahasiswa::all()->where('status', '!=', '0')->toArray();
        // dd($mahasiswa);

        return view('admin.master.mastermhs', compact('sb_menu', 'sb_submenu', 'mahasiswa'));
    }

    public function mastermk() {
        $sb_menu = "mahasiswa";
        $sb_submenu = "mastermk";

        return view('admin.master.mastermk', compact('sb_menu', 'sb_submenu'));
    }

    public function masterkelas() {
        $sb_menu = "mahasiswa";
        $sb_submenu = "masterkelas";

        if(!session()->has('kelas')) {
            session()->put('kelas', array());
        }
        $kelas = Kelas::all()->where('status', '!=', '0')->toArray();

        return view('admin.master.masterkls', compact('sb_menu', 'sb_submenu', 'kelas'));
    }

    public function masterdosen() {
        $sb_menu = "mahasiswa";
        $sb_submenu = "masterdosen";

        return view('admin.master.masterdsn', compact('sb_menu', 'sb_submenu'));
    }

    public function submitMahasiswa (Request $req) {

        $mhs = new Mahasiswa;

        $mhs->nama = $req->post('nama');
        $mhs->nim = $req->post('nim');
        $mhs->no_wa = $req->post('no_wa'); // Menangani kasus di mana 'no_wa' mungkin null

        $mhs->save();
        

        session()->flash('notif', 'Data berhasil disimpan!');

        return redirect('/mastermhs');
    }

    public function updatemahasiswa ($idmhs) {

        $sb_menu = 'mahasiswa';
        $sb_submenu = 'mastermahasiswa';

        $mahasiswa = Mahasiswa::find($idmhs);
        // dd($mahasiswa);

        return view('admin.master.updatemahasiswa', compact('sb_menu', 'sb_submenu', 'mahasiswa'));
    }

    public function submit_editmhs(Request $req){

        $mhs = Mahasiswa::find($req->post('idmahasiswa'));

        $mhs->nama = $req->post('nama');
        $mhs->nim = $req->post('nim');
        $mhs->no_wa = $req->post('no_wa');

        $mhs->save();

        return redirect('/mastermhs');
    }

    public function hapusmahasiswa ($idmhs) {
        $mhs = Mahasiswa::find($idmhs);

        $mhs->status = false;
        $mhs->save();

        return redirect('/mastermhs');
    }

    public function submitKelas (Request $req) {

        $kelas = new Kelas;

        $kelas->nama_kelas = $req->post('nama_kelas');


        $kelas->save();
        

        session()->flash('notif', 'Data berhasil disimpan!');

        return redirect('/masterkls');
    }

    public function updatekelas ($idkelas) {

        $sb_menu = 'mahasiswa';
        $sb_submenu = 'masterkelas';

        $kelas = Kelas::find($idkelas);
        // dd($mahasiswa);

        return view('admin.master.updatekelas', compact('sb_menu', 'sb_submenu', 'kelas'));
    }

    public function submit_editkls(Request $req){

        $kelas = Kelas::find($req->post('idkelas'));

        $kelas->nama_kelas = $req->post('nama_kelas');

        $kelas->save();

        return redirect('/masterkls');
    }

    public function hapuskelas ($idkelas) {
        $kelas = Kelas::find($idkelas);

        $kelas->status = false;
        $kelas->save();

        return redirect('/masterkls');
    }
}
