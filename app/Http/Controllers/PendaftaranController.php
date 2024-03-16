<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pendaftaran;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;

class PendaftaranController extends Controller
{
    public function index()
    {
        $pendaftarans = Pendaftaran::all();
        return view('admin.pendaftaran_index', compact('pendaftarans'));
    }

    public function create()
    {
        $client = new Client(['verify' => false]);
        $response = $client -> request('GET', 'https://api.binderbyte.com/wilayah/provinsi?api_key=36092121df2967d0cd33e5b8123e2f1881434b96318f342045fa8bbd00d51cc8');
        $data = json_decode($response->getBody(), true);
        $array_provinsi = $data['value'];
        return view('user.pendaftaran_create', compact('array_provinsi'));
    }

    public function store(Request $request)
    {
        $pendaftaran = Pendaftaran::where('user_id', auth()->user()->id)->get();
        if (count($pendaftaran) == 1)
        {
            redirect(route('pendaftaran.create'));
        }
        $request->validate([
            'foto'  => ['required', 'file'],
            'nama_lengkap' => ['required', 'string'],
            'alamat_ktp' => ['required', 'string'],
            'alamat' => ['required', 'string'],
            'kecamatan' => ['required', 'string'],
            'kabupaten' => ['required', 'string'],
            'provinsi' => ['required', 'string'],
            'nomor_telepon' => ['required', 'integer'],
            'nomor_hp' => ['required', 'integer'],
            'email' => ['required', 'email' , 'unique:' . User::class],
            'kewarganegaraan' => ['required', 'string'],
            'tanggal_lahir' => ['required', 'date'],
            'tempat_lahir' => ['required', 'string'],
            'jenis_kelamin' => ['required', 'string'],
            'status_menikah' => ['required', 'string'],
            'agama' => ['required', 'string'],
        ]);
        
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $foto = fake()->uuid() . '.' . $data['foto']->extension();
        $request->file('foto')->move(public_path('/foto/user'), $foto);
        $data['foto'] = "/foto/user/$foto";

        Pendaftaran::create($data);
    
        return redirect(route('pendaftaran.create'));
    }

    public function edit(Pendaftaran $pendaftaran)
    {
        return view('admin.pendaftaran_edit', [
            'pendaftaran' => $pendaftaran,
        ]);
    }

    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        $data = $request->all();
        $foto = fake()->uuid() . '.' . $data['foto']->extension();
        $request->file('foto')->move(public_path('/foto/user'), $foto);
        $data['foto'] = "/foto/user/$foto";

        $pendaftaran->update($data);

        return redirect(route('pendaftaran.index'));
    }

    public function destroy(Pendaftaran $pendaftaran)
    {
        $pendaftaran->delete();
        return back();
    }
}
