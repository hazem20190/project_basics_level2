<?php

namespace App\View\Components;

use App\Models\OurTeam as ourteams;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OurTeam extends Component
{

    public $ourteams;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->ourteams = ourteams::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.our-team');
    }
}
