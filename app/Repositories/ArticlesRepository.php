<?php 

namespace App\Repositories; 

use App\Repositories\ImageRepository as ImageUpload;
use App\Contracts\UplaodContract;

class ArticlesRepository extends AbstractRepository
{
	public function __construct($model)
	{
		parent::__construct($model);
	}

	public function store($request)
	{
		return parent::store($this->upload($request));
	}

	public function update($request, $id)
	{
		if ($request->has('image') && $request->file('image')->isValid()) {

			$request = $this->deleteOldImage($id)->upload($request);
		}

		return parent::update($request, $id);
	}

	protected function upload($request)
	{
		$factory = app()->make(UplaodContract::class);

		$image = $factory->upload($request, $this->model->articleImagePath);

		return collect($request)->merge(['image' => $image]);
	}

	protected function deleteOldImage($id)
	{
		$image = $this->model->findOrFail($id)->getRawOriginal('image');

		$full_path = public_path($this->model->articleImagePath .'/'. $image);

		if(file_exists($full_path)) {
		   unlink($full_path);
		}

		return $this;
	}
}