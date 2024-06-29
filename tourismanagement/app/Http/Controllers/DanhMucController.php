<?php

namespace App\Http\Controllers;

use App\Components\Recusive;
use App\Models\DanhMuc;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DanhMucController extends Controller
{
    private $danhmuc;

    public function getDanhMuc($id_Parent = '')
    {
        $data = $this->danhmuc->all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->DanhMucRecusive($id_Parent);
        return $htmlOption;
    }

    public function __construct(DanhMuc $danhmuc)
    {
        $this->danhmuc = $danhmuc;
    }

    public function create()
    {
        $htmlOption = $this->getDanhMuc();
        return view('danhmuc.add', compact('htmlOption'));
    }

    public function index()
    {
        $danhmucs = $this->danhmuc->latest()->paginate(5);
        return view('danhmuc.index', compact('danhmucs'));
    }

    public function store(Request $request)
    {
        $this->danhmuc->create([
            'TenDanhMuc' => $request->TenDanhMuc,
            'id_Parent' => $request->id_Parent,
            'slug' => Str::slug($request->TenDanhMuc)
        ]);
        return redirect()->route('danhmuc.index');
    }

    public function edit($id)
    {
        $danhmuc = $this->danhmuc->find($id);
        $htmlOption = $this->getDanhMuc($danhmuc->id_Parent);
        return view('danhmuc.edit', compact('danhmuc', 'htmlOption'));
    }

    public function update($id, Request $request)
    {
        $this->danhmuc->find($id)->update([
            'TenDanhMuc' => $request->TenDanhMuc,
            'id_Parent' => $request->id_Parent,
            'slug' => Str::slug($request->TenDanhMuc)
        ]);
        return redirect()->route('danhmuc.index');
    }

    public function delete($id)
    {
        $this->danhmuc->find($id)->delete();
        return redirect()->route('danhmuc.index');
    }
}
