<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @property mixed $id
 * @property mixed $name
 * @property mixed $created_at
 * @property mixed $updated_at
 * @property mixed $deleted_at
 */
class DepartmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    #[ArrayShape(['id' => "mixed", 'name' => "mixed", 'created_at' => "mixed", 'updated_at' => "mixed", 'deleted_at' => "mixed"])] public function toArray($request)
    {
        return [
            'id' =>$this->id,
            'name' =>$this->name,
            'created_at' =>$this->created_at,
            'updated_at' =>$this->updated_at,
            'deleted_at' =>$this->deleted_at,
        ];
    }
}
