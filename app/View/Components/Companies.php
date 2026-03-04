<?php

namespace App\View\Components;

use Closure;
use App\Models\Company;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Companies extends Component
{

    public $companies;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->companies = Company::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.companies');
    }
}
