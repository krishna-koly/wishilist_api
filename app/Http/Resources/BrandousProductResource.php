<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BrandousProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'image' => (ImageResource::collection($this->images))->map(function($item, $key){
                return $item->url;
            }),
            'description' => $this->description,
            'price' => $this->purchage_price,
            'stock' => $this->stock,
            'discount' => $this->discount,
            'subCategory' => $this->subcategory->name,
            'brand' => $this->brand->name,
            'discount' => $this->discount,
            'colors' => ColorResource::collection($this->colors)->map(function($item, $key){
                return $item->name;
            }),
            'sizes' => SizeResource::collection($this->sizes)->map(function($item, $key){
                return $item->name;
            }),
            'units' => UnitResource::collection($this->units)->map(function($item, $key){
                return $item->name;          
            }),
            'offer' => new OfferResource($this->offers)
        ];
    }
}
