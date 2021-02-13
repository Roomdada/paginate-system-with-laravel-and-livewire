<?php

namespace App\Http\Livewire;

use App\Models\Student as StudentList;
use Livewire\Component;
use Livewire\WithPagination;

class Student extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';


	public $paginate = 10;
    public function render()
    {
        return view('livewire.student',['students' => StudentList::OrderByDesc('created_at')->paginate($this->paginate)]);
    }
}
