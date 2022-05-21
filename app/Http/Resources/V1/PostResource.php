<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
            'link' => $this->link,
            'created_at' => $this->created_at,
            'amount_of_upvotes' => $this->amount_of_upvotes,
            'author_name' => $this->author_name,
            'comments' => PostCommentResource::collection($this->comments),
        ];
    }
}
