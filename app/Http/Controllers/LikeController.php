<?php

namespace App\Http\Controllers;

use App\Model\Like;
use App\Model\Replay;
use Illuminate\Http\Request;

class LikeController extends Controller
{


      /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('JWT');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function show(Like $like)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function edit(Like $like)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Like $like)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function destroy(Like $like)
    {
        //
    }

    public function likeIt(Replay $replay)
    {
        $replay->like()->create([
           // 'user_id' => auth()->id()
           'user_id' => '1'
        ]);
    }

    public function unLikeIt(Replay $replay)
    {
       // $replay->like()->where(['user_id',auth()->id()])->first()->delete();
        $replay->like()->where('user_id','1')->first()->delete();
    }
}
