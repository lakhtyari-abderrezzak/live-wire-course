<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserTable extends Component
{
    use WithPagination;
    public $search = '';
    public $role = '';
    public $sortBy = 'created_at';
    public $sortDir = 'DESC';
    public $pages = 15;
    public function sort($sortName){
        if($this->sortBy === $sortName){
            $this->sortDir = ($this->sortDir == 'ASC') ? 'DESC': 'ASC';
        }
        $this->sortBy = $sortName;
        // $this->sortDir = 'DESC';
    }
    public function delete(User $user){
        $user->delete();
    }
    public function updatedSearch(){
        $this->resetPage();
    }
    public function render()
    {
        return view('livewire.user-table', [
            'users' => User::search($this->search)
            ->when($this->role !== '', function($query){
                $query->where('is_admin', $this->role);
            } )
            ->orderBy($this->sortBy, $this->sortDir)
            ->paginate($this->pages),
        ]);
    }
}
