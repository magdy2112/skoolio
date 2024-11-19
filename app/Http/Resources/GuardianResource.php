<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GuardianResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $data = parent::toArray($request);


        




        return $data;
    }
}


// public function toArray(Request $request): array
// {
//     // Start with the default data from the parent class
//     $data = parent::toArray($request);

//     // Check if the request is for the student route
//     if ($request->is('student')) {
//         // If the request is specifically for the student route, return the student's name and guardian's name
//         $response = [
//             'student_name' => $this->name,
//         ];

//         // Include guardian's name if the relationship is loaded
//         if ($this->relationLoaded('guardian')) {
//             $response['guardian_name'] = $this->guardian->name; // Assuming 'guardian' is a relationship method
//         }

//         return $response;
//     }

//     // For other requests, return the full data
//     $data['email'] = $this->email;
//     $data['phone'] = $this->phone;

//     // If the guardian relationship is loaded, include it in the response
//     if ($this->relationLoaded('guardian')) {
//         $data['guardian_name'] = $this->guardian->name; // Assuming 'guardian' is a relationship method
//     }

//     return $data;
// }
