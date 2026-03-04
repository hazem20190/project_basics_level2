<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Ramsey\Uuid\Type\Integer;

class InputForm extends Component
{

    public string $name;
    public string $type;
    public $value;
    public $rows;
    public string $read;
    /**
     * Create a new component instance.
     */
    public function __construct($name, $type, $value = '', $rows = '5', $read = '')
    {
        $this->name = $name;
        $this->type = $type;
        $this->value = $value;
        $this->rows = $rows;
        $this->read = $read;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-form');
    }
}
