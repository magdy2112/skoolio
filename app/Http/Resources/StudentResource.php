<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource {
    /**
    * Transform the resource into an array.
    *
    * @return array<string, mixed>
    */

    public function toArray( Request $request ): array {

        $data = parent::toArray( $request );

        if ( $this->relationLoaded( 'guardian' ) ) {
            $data[ 'guardian' ] = new GuardianResource( $this->whenLoaded( 'guardian' ) );

        }

        return $data;

    }

}

