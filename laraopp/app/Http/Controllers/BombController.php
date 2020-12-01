<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bomb;
use DB;
use Validator;

class BombController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bombs = Bomb::all();
        $bombs = Bomb::select('id','book_name','price','stocks',)->get();
        return view('bombs/index',compact('bombs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bombs/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rulus = [
            'name' => 'string|required|max:20',
           ];  

            $validator = Validator::make($request->all(), $rulus);    
            $errors = $validator->errors();

              if ($validator->fails()) {
                return redirect('bombs/index')
                        ->withErrors($errors)
                        ->withInput();
                }

                $bomb=new Bomb;
                $bomb->book_name=$request->input('book_name');
                $bomb->price=$request->input('price');
                $bomb->stocks=$request->input('stocks');
                $bomb->save();
      
        return redirect('bombs/index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bomb=Bomb::find($id);
        return view('bombs/index', compact('bomb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member=Member::find($id);
        return view('bombs/index', compact('bomb'));
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
        $bomb=Bomb::find($id);
        return view('bombs/index', compact('bomb'));
    }

    public function search(Request $request)
    {
      $serach=$request->input('q');
  
      $query=DB::table('bombs');
  
      //検索ワードの全角スペースを半角スペースに変換
      $serach_spaceharf=mb_convert_kana($serach, 's');
  
  
      //検索ワードを半角スペースで区切る
      $keyword_array=preg_split('/[\s]+/', $serach_spaceharf, -1, PREG_SPLIT_NO_EMPTY);
  
      //検索ワードをループで回してマッチするレコードを探す
      foreach ($keyword_array as $keyword) {
          $query->where('name', 'like', '%'.$keyword.'%');
        }
  
      $query->select('id', 'book_name', 'price', 'stocks');
      $bomb=$query->paginate(20);
  
      return view('bombs/index', compact('bombs'));
    }
  
  
}
