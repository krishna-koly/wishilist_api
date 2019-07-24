<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\OfferResource;
use App\Http\Resources\ImageResource;

class WrappingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return  [
            'wrappingId' => $this->id,
            'title' => $this->name,
            'image' => (ImageResource::collection($this->images))->map(function($item, $key){
                return $item->url;
            }),
            'description' => $this->description,
            'price' => $this->purchage_price,
            'stock' => $this->stock,
            'discount' => $this->discount,
            'offer' => new OfferResource($this->offer)
        ];
    }
}
