<?php

namespace App\View\Components;

use Closure;
use App\Models\Testimonial;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Testimonials extends Component
{

    public $testimonials;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->testimonials = Testimonial::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.testimonials');
    }
}
