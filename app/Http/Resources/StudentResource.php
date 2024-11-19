<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        $data = parent::toArray($request);
        $data['name']= $this->name;
        $data['email'] = $this->email;
        $data['phone'] = $this->phone;
        if ($this->relationLoaded('guardian')) {
        $data['guardian'] = new GuardianResource($this->whenLoaded('guardian'));

    }
    $data['guardian_name']= $this->guardian->name;

        return $data;
    }
}
// $table->id();
// $table->string('name');
// $table->string('email')->unique()->nullable();
// $table->string('password');
// $table->foreignId('guardian_id')->constrained();
// $table->foreignId('level_id')->constrained();
// $table->foreignId( 'class_id')->constrained('class_names');
// $table->string('phone');
// $table->integer('age');
// $table->string('img')->nullable();
// $table->enum('gender',['male','female']);
// $table->timestamp('created_at');
// $table->timestamp('updated_at')->nullable();
// $table->softDeletes()->nullable();
