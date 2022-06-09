<?php  

namespace App\Repositories; 

use Illuminate\Database\Eloquent\Model;
use App\Contracts\UplaodContract;

abstract class AbstractRepository
{
	protected ?Model $model;
	protected $image = null;

	protected function __construct(?Model $model, ?UplaodContract $image = null)
	{
		$this->setModel($model);
		$this->setImage($image);
	}

	public function all()
	{
		return $this->model->all();
	}

	public function get()
	{
		return $this->model->get();
	}

	public function first()
	{
		return $this->model->first();
	}

	public function paginate($perPage = 10)
	{
		if(request()->has('per-page')) $perPage = request('per-page');

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
    	return $this->model->destroy($id) === 0 ?: [];
	}

	public function setModel($model)
	{
		$this->model = $model;
		
	}

	public function setImage($image)
	{
		$this->image = $image;
	}

	public function getModel($model)
	{
		return $this->model;
		
	}

	public function getImage($image)
	{
		return $this->image;
	}
}