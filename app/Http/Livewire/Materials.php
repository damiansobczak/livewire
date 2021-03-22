<?php

namespace App\Http\Livewire;

use App\Models\Color;
use App\Models\Material;
use Livewire\Component;

class Materials extends Component
{
    public $colors;
    public $collections;
    public $materials;

    public $formName;
    public $formColor;
    public $formCollection;

    public $addingColor = false;
    public $formAddingColor;

    public function submit()
    {
        Material::create([
            'name' => $this->formName,
            'color_id' => $this->formColor,
            'collection_id' => $this->formCollection,
        ]);

        $this->formName = '';
        $this->formColor = '';
        $this->formCollection = '0';

        $this->materials = Material::all();
    }

    public function toggle()
    {
        $this->addingColor = !$this->addingColor;
    }

    public function add()
    {
        Color::create([
            'name' => $this->formAddingColor
        ]);
        $colors = Color::all();

        $this->formAddingColor = '';
        $this->colors = $colors;
        $this->toggle();
    }

    public function render()
    {
        return view('livewire.materials');
    }
}
