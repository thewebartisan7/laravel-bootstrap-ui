<?php

declare(strict_types=1);

namespace Laraloop\UI\Components\Buttons;

use Illuminate\Contracts\View\View;

class Input extends Button
{
  public function render(): View
  {
    return view('ui::button.input');
  }
}
