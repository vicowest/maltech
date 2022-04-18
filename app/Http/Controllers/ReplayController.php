<?php

namespace App\Http\Controllers;

use App\Model\Replay;
use App\Model\Question;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Resources\ReplayResorce;

class ReplayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Question $question)
    {
        return ReplayResorce::collection($question->replays);
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
    public function store(Question $question, Request $request)
    {
        $replay = $question->replays()->create($request->all());
        return response(['replay'=> new ReplayResorce($replay)], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Replay  $replay
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question, Replay $replay)
    {
        return new ReplayResorce($replay);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Replay  $replay
     * @return \Illuminate\Http\Response
     */
    public function edit(Replay $replay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Replay  $replay
     * @return \Illuminate\Http\Response
     */
    public function update(Question $question, Request $request, Replay $replay)
    {
        $replay->update($request->all());
        return response('updated', Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Replay  $replay
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question, Replay $replay)
    {
        $replay->delete();
        return response('deleted', Response::HTTP_CREATED);
    }
}
