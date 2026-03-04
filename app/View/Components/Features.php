<?php

namespace App\View\Components;

use Closure;
use App\Models\Feature;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Features extends Component
{

    public $features;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->features = Feature::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.features');
    }
}
