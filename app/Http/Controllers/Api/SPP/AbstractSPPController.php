<?php

namespace App\Http\Controllers\Api\SPP;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\SPPResource as JsonResource;
use App\Contracts\SPPModelContract;
use App\Contracts\SPPRepositoryContract;
use App\Repositories\SPP\AlurPelayananRepository;
use App\Http\Requests\SPPRequest;

abstract class AbstractSPPController extends Controller
{
    protected $repository = null;
    protected $image = null;

    public function __construct($repository, $image = null)
    {
        $this->repository = $repository;
        $this->image = $image;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return JsonResource::collection($this->repository->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SPPRequest $request)
    {
        return  new JsonResource($this->repository->store($request));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new JsonResource($this->repository->show($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SPPRequest $request, $id)
    {
         return new JsonResource($this->repository->update($request, $id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return new JsonResource($this->repository->destroy($id));
    }
}
