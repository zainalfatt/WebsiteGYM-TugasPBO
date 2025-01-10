<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class PenggunaComponent extends Component
{
    use  WithPagination;
    protected $pagginationTheme = "bootstrap";
    public $addpage = false;
    public function render()
    {
        $data['pengguna'] = User::paginate(5);
        return view('livewire.pengguna-component')->with('pengguna', User::paginate(5));
    }
    
}
