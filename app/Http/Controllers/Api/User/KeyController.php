<?php

namespace App\Http\Controllers\Api\User;

use App\Key;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Contracts\KeyInterface as Repository;

class KeyController extends Controller
{
    /**
     * @var \App\User
     */
    protected $user;

    /**
     * @var \App\Contracts\KeyInterface
     */
    protected $reposotory;

    /**
     * Create a new controller instance.
     *
     * @param  \App\Contracts\KeyInterface  $reposotory
     * @return void
     */
    public function __construct(Repository $reposotory)
    {
        $this->user = User::find(1);

        $this->reposotory = $reposotory;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->reposotory->getKeysByUser($this->user);
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
     * @param  \App\Key  $key
     * @return \Illuminate\Http\Response
     */
    public function show(Key $key)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Key  $key
     * @return \Illuminate\Http\Response
     */
    public function edit(Key $key)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Key  $key
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Key $key)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Key  $key
     * @return \Illuminate\Http\Response
     */
    public function destroy(Key $key)
    {
        //
    }
}