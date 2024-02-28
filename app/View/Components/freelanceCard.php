<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FreelanceCard extends Component
{
    public function __construct(
        public $title,
        public $description,
        public $start,
        public $end,
        public $money,
        public $telefoneFixo,
        public $phone,
        public $email,
    )
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.freelanceCard');
    }
}