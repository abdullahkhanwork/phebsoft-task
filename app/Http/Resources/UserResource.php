<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed $id
 * @property mixed $name
 * @property mixed $email
 * @property mixed $created_at
 * @property mixed $updated_at
 * @property mixed $deleted_at
 */
class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' =>$this->id,
            'name' =>$this->name,
            'email' =>$this->email,
            'created_at' =>$this->created_at,
            'updated_at' =>$this->updated_at,
            'deleted_at' =>$this->deleted_at,
        ];
    }
}
