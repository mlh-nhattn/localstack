<?php

namespace App\Http\Controllers;

use Aws\Sqs\SqsClient; 
use Aws\Exception\AwsException;

class LocalStackController extends Controller
{
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
        return 123;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LocalStack  $localStack
     * @return \Illuminate\Http\Response
     */
    public function show(LocalStack $localStack)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LocalStack  $localStack
     * @return \Illuminate\Http\Response
     */
    public function edit(LocalStack $localStack)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LocalStack  $localStack
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LocalStack $localStack)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LocalStack  $localStack
     * @return \Illuminate\Http\Response
     */
    public function destroy(LocalStack $localStack)
    {
        //
    }
}
