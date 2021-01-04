<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Step;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $menus = DB::table('menus')->orderByDesc('created_at')->simplePaginate(12);
//        dd($menus);
        return view('menu.index', ['menus' =>$menus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        //validate验证数据
        $validateData = $request->validate([
            'title' => '',
            'synopsis' => '',
            'cid' => 'required',
            'lid' => 'required',
            'steps' => '',
        ]);
        $validateData['uid'] = Auth::id();
        //获取步骤数组
        $steps = $validateData['steps'];
        //销毁
        unset($validateData['steps']);
//        新建菜谱
        $men = new Menu;
        $men->title = $validateData['title'];
        $men->synopsis = $validateData['synopsis'];
        $men->cid = $validateData['cid'];
        $men->lid = $validateData['lid'];
        $men->uid = $validateData['uid'];
        $men->save();
//        $new = Menu::created($validateData);
        $mid = $men->id;
        //菜谱步骤
        foreach ($steps as $k => $v){
            $s = new Step;
            $s->mid = $mid;
            $s->step_order = $k;
            $s->detail = $v;
            $s->save();
//            $arr = array('mid'=>$mid, 'step_order' => $k, 'datail' => $v);
////            dd($arr);
//            Step::created($steps);
        }

        return $this->show($mid);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $menu = Menu::find($id);
        $menu['author'] = $menu->author->name;
        $menu['category'] = $menu->category->name;
        $menu['level'] = $menu->level->name;
        $menu['foods'] = $menu->foods;
        $menu['steps'] = $menu->steps;
//        dd($menu);
        return view('menu.show', ['menu' => $menu]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
