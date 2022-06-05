<?php  

namespace App\Repositories; 

use Illuminate\Database\Eloquent\Model;

abstract class AbstractRepository
{
	protected Model $model;

	protected function __construct(Model $model)
	{
		$this->model = $model;
	}

	public function all()
	{
		return $this->model->all();
	}

	public function paginate($perPage = 10)
	{
		return $this->model->latest()->paginate($perPage);
	} 

	public function show($id)
    {
        return $this->model->findOrFail($id);
    }

	public function create()
    {
        //
    }

    public function store($request)
    {
        return $this->model->create($request->all());
    }

	public function edit()
	{
		//
	}

	public function update($request, $id)
    {
    	return tap($this->model->findOrFail($id))->update($request->all());
    }

    public function destroy($id)
    {
        return $this->model->destroy($id);
    }
}