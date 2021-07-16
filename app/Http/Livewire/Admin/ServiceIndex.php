<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Service;

use Livewire\WithPagination;
class ServiceIndex extends Component
{
    use WithPagination;
   protected $paginationTheme='bootstrap';

 public $search;
 public function updatingSearch(){
       $this->resetPage();
 }
    public function render()

    { 
        $services =Service::where('user_id',auth()->user()->id)
        ->where('name','LIKE','%'.$this->search.'%')
        ->latest('id')
        ->paginate();

        return view('livewire.admin.service-index',compact('services'));
    }
}
