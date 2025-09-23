<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CategoryForm extends Form
{
    #[Validate('required|min:2')]
    public $name;

    #[Validate('required|min:2')]
    public $slug;

    #[Validate('string:max:500')]
    public $description;
}
