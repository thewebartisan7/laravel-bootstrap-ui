<?php

declare(strict_types=1);

namespace Laraloop\UI\Components\Buttons;

use Illuminate\Contracts\View\View;

class Link extends Button
{
  /** @var string */
  public $current;

  /** @var bool */
  public $disabled;

  /**
   * @param string $color
   * @param bool $outline
   * @param bool $small
   * @param bool $large
   * @param bool $active
   * @param string $type
   * @param string $current
   * @param bool $disabled
   */
  public function __construct(
    string  $color = 'primary',
    bool    $outline = false,
    bool    $small = false,
    bool    $large = false,
    bool    $active = false,
    ?string $toggle = null,
    string  $type = 'button',
    bool    $expanded = false,
    ?string $target =  null,
    string  $current = 'page',
    bool    $disabled = false
  )
  {
    parent::__construct($color, $outline, $small, $large, $active, $toggle, $type, $expanded, $target);

    $this->current = $current;
    $this->disabled = $disabled;
  }

  public function render(): View
  {
    return view('ui::button.link');
  }
}
