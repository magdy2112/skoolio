<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Request as FacadesRequest;

class GuardianResource extends JsonResource {
    /**
    * Transform the resource into an array.
    *
    * @return array<string, mixed>
    */

    public function toArray( Request $request ) : array {
        $data = parent::toArray( $request );

        if ( $request->routeIs( 'student' ) ) {

            $data = [
                'id' => $this->id,
                'email' => $this->email,
                'phone' => $this->phone,
                'img' => $this->img,
                'name' => $this->name,
            ];
        }
        return $data;
    }
}
