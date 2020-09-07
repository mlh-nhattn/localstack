<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\FireStore;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\FireStoreServiceInterface;

class FireStoreController extends Controller
{
    protected $fireStoreService;

    public function __construct(FireStoreServiceInterface $fireStoreService)
    {
        $this->fireStoreService = $fireStoreService;
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
     * @param  \App\FireStore  $fireStore
     * @return \Illuminate\Http\Response
     */
    public function show(FireStore $fireStore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FireStore  $fireStore
     * @return \Illuminate\Http\Response
     */
    public function edit(FireStore $fireStore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FireStore  $fireStore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FireStore $fireStore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FireStore  $fireStore
     * @return \Illuminate\Http\Response
     */
    public function destroy(FireStore $fireStore)
    {
        //
    }

    /**
     * Send message.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendMessage()
    {
        //
        $sendMessage = $this->fireStoreService->sendMessage();
        // dd($sendMessage);
        return view('welcome')->with('user', $sendMessage);
    }
}
