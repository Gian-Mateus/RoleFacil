<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class freelanceList extends Component
{
    /**
     * Create a new component instance.
     */
    
    public function __construct(
        public string $aboutWhat,
        public array $pathtimg
    )
    {
        $this->pathtimg = [
            "teste1",
            "teste2",
            "teste3",
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {  
        return view('components.freelanceList');
    }
}
