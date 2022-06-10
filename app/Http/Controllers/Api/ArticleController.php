<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Article;
use App\Repositories\ArticlesRepository; 
use App\Http\Resources\ArticleResource;
use App\Http\Requests\ArticleRequest;
use App\Contracts\UplaodContract;

class ArticleController extends Controller
{
    protected $repository;

    public function __construct(UplaodContract $image = null)
    {
        $this->repository = new ArticlesRepository(new Article, $image);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ArticleResource::collection($this->repository->paginate());
    }

     /**
     * Display a latest of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function latest()
    {
        $take = 1;

        if(request()->has('take')) $take = request()->take;

        return ArticleResource::collection($this->repository->get()->take($take));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        return  new ArticleResource($this->repository->store($request));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new ArticleResource($this->repository->show($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, $id)
    {
         return new ArticleResource($this->repository->update($request, $id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return new ArticleResource($this->repository->destroy($id));
    }
}
