<?php  

namespace App\Repositories; 

use App\Contracts\UplaodContract;

class HeadlineRepository extends AbstractRepository
{
	public function __construct($model, $image = null)
	{
		parent::__construct($model, $image);
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

		$image = $this->image->upload($request, $this->model->headlineImagePath);

		return collect($request)->merge(['image' => $image]);
	}

	protected function deleteOldImage($id)
	{
		$image = $this->model->findOrFail($id)->getRawOriginal('image');

		$full_path = public_path($this->model->headlineImagePath .'/'. $image);

		if(file_exists($full_path)) {
		   unlink($full_path);
		}

		return $this;
	}

	public function destroy($id)
    {
    	$this->deleteOldImage($id);

    	return parent::destroy($id);
	}
}