<?php  

namespace App\Repositories\SPP;

use App\Contracts\UplaodContract;

trait TraitPelayanan
{
	public function __construct($model = null, $image = null)
    {
        parent::__construct($model, $image);
    }

    public function get()
    {
        return $this->model->whereType($this->model::class)->whereActive(1)->get();
    }

    public function store($request)
    {
        return parent::store($this->upload($request, 'images/spp'));
    }

    public function update($request, $id)
    {
        if ($request->has('image') && $request->file('image')->isValid()) {

            $request = $this->upload($request, 'images/spp');
        }

        return parent::update($request, $id);
    }

    public function upload($request, $savePath)
    {
        $image = $this->image->upload($request, $savePath);

        return collect($request)->merge([
            'image' => $image,
            'type' => $this->model::class
        ]);
    }
}