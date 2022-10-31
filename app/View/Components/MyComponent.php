<?php

declare(strict_types=1);

namespace App\View\Components;

// TODO extends others button like tab, modal, etc.

use Illuminate\View\Component;

class MyComponent extends Component
{
    /** @var string */
    public $color;

    /** @var string|null */
    public $size;

    /**
     * @param string      $color
     * @param string|null $size
     */
    public function __construct(string $color = 'primary', string $size = null)
    {
        $this->color   = $color;
        $this->size    = $size;
    }

   public function render()
   {
       return 'components.my-component';
   }
}
