<?php

namespace App\Livewire;

use App\Livewire\Forms\CategoryForm;
use App\Models\Category;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class CreateCategory extends Component
{
    public CategoryForm $form;

    public function save()
    {
        $this->validate();

        Category::create(
            $this->form->all()
        );

        return $this->redirectRoute('dashboard.category');
    }

    public function render()
    {
        return view('livewire.create-category');
    }
}
