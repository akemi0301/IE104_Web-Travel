<?php

namespace App\Http\Controllers;

use App\Components\MenuRecusive;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    private $menuRecusive;

    public function __construct(MenuRecusive $menuRecusive, Menu $menu)
    {
        $this->menuRecusive = $menuRecusive;
        $this->menu = $menu;
    }

    public function index()
    {
        $menu = $this->menu->paginate(5);
        return view('menu.index', compact('menu'));
    }

    public function create()
    {
        $optionSelect = $this->menuRecusive->menuRecusiveAdd();
        return view('menu.add', compact('optionSelect'));
    }

    public function store(Request $request)
    {
        $this->menu->create([
            'Ten' => $request->Ten,
            'id_Parent' => $request->id_Parent,
            'slug' => Str::slug($request->Ten)
        ]);
        return redirect()->route('menu.index');
    }
    public function edit($id, Request $request){
        $menuFollowEdit = $this->menu->find($id);
        $optionSelect = $this->menuRecusive->menuRecusiveEdit($menuFollowEdit->id_Parent);
        return view('menu.edit', compact('optionSelect', 'menuFollowEdit'));
    }
    public function update($id, Request $request){
        $this->menu->find($id)->update([
            'Ten' =>$request->Ten,
            'id_Parent' => $request->id_Parent,
            'slug' => Str::slug($request->Ten)
        ]);
        return redirect()->route('menu.index');
    }
    public function delete($id){
        $this->menu->find($id)->delete();
        return redirect()->route('menu.index');
    }
}
