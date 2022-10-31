<?php

declare(strict_types=1);

namespace App\View\Components;

// TODO extends others button like tab, modal, etc.

use Illuminate\View\Component;

class MyChild extends Component
{
    /**
     */
    public function __construct()
    {
    }

    public function render()
    {
        return function($data) {

            return 'components.my-child';
        };
    }
}
