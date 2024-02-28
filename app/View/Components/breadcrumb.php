<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
// use Illuminate\Support\Facades\Route;

class breadcrumb extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $routeLinks,
    )
    {
        // $routeLinks = explode(",",$this->routeLinks);
    }

    /**
     * Get the view / contents that represent the component.
     */

     // dd(Route::current());
    public function render(): View|Closure|string
    {   
        
        return view('components.breadcrumb');
    }
}
