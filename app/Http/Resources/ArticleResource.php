<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
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
            'id'            => $this->id,
            'user_id'       => $this->user_id,
            'title'         => $this->title,
            'body'          => $this->body,
            'slug'          => $this->slug,
            'created_at'    => $this->created_at,
            'image'         => str_contains($this->image, "http") ? $this->image : asset('images/articles/' . $this->image),
            'details'       => url('api/articles/') . '/' . $this->id
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
