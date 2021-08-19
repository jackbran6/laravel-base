<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Article extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // Below returns everything to do with the data
        // return parent::toArray($request);

        // This returns only what is specified - in this case only the id/title/body
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body
        ];
    }
    public function with($request)
    {
        return [
            'version' => '1.0.0',
            'author_url' => url('http://jack.com')
        ];
    }
}
