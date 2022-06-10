<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SPPResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'image' => url('images/spp/' . $this->image),
            'icon' => url('images/spp/icons/' . $this->icon),
            'active' => $this->active,
            'detail' => url('api/spp/' . $this->url),
            'url' => $this->url,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }

    public function with($request)
    {
        return [
            "errors"=> false,
            "status" => "success",
            "message" => "successfully {$this->httpMethod} data"
        ];
    }
}
