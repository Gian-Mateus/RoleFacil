<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Freelancer;

class FreelanceCard extends Component
{
    public $freelancer;

    /**
     * Create a new component instance.
     *
     * @param  int  $freelancerId
     * @return void
     */
    public function __construct($freelancerId)
    {
        // Fetch the Freelancer data based on $freelancerId
        $this->freelancer = Freelancer::findOrFail($freelancerId);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('components.freelanceCard');
    }
}