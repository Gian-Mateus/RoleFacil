<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Freelancer;

class FreelanceCard extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        $freelancers = Freelancer::all();
        return view('components.freelanceCard', ['freelancers' => $freelancers]);
    }
}