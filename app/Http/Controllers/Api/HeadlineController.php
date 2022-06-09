<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Headline;
use App\Repositories\HeadlineRepository; 
use App\Http\Resources\HeadlineResource;
use App\Http\Requests\HeadlineRequest;
use App\Contracts\UplaodContract;

class HeadlineController extends Controller
{
    protected $repository;

    public function __construct(UplaodContract $image = null)
    {
        $this->repository = new HeadlineRepository(new Headline, $image);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return HeadlineResource::collection($this->repository->paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HeadlineRequest $request)
    {
        return  new HeadlineResource($this->repository->store($request));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new HeadlineResource($this->repository->show($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HeadlineRequest $request, $id)
    {
         return new HeadlineResource($this->repository->update($request, $id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return new HeadlineResource($this->repository->destroy($id));
    }
}
