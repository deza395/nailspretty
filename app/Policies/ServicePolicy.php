<?php

namespace App\Policies;

use App\Models\Service;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ServicePolicy
{
    use HandlesAuthorization;

     public function author(User $user, Service $service)
     {
       if($user->id==$service->user_id) {
        return true;
       } else{
            return false;
       } 
           
     }
    public function published(User $user,Service $service){
        if($service->status==2){
            return true;
        }else{
            return false;
        }

    }
}
