<?php

declare(strict_types=1);

namespace Laraloop\UI\Components\Buttons;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Button extends Component
{
  /** @var string */
  public $id;

  /** @var string */
  public $color;

  /** @var bool */
  public $outline;

  /** @var bool */
  public $small;

  /** @var bool */
  public $large;

  /** @var string|null */
  public $toggle;

  /** @var bool */
  public $active;

  /** @var string */
  public $type;

  /** @var bool */
  public $expanded;

  /** @var string */
  public $target;

  /**
   * @param string $color
   * @param bool $outline
   * @param bool $small
   * @param bool $large
   * @param bool $active
   * @param string $type
   * @param bool $expanded
   * @param string|null $target
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
    ?string $target =  null
  )
  {
    $this->color = $color;
    $this->outline = $outline;
    $this->small = $small;
    $this->large = $large;
    $this->toggle = $toggle;
    $this->active = $active;
    $this->type = $type;
    $this->expanded = $expanded;
    $this->target = $target;
  }

  public function render(): View
  {
    return view('ui::button.index');
  }

  public function isPressed()
  {
    return $this->toggle === 'button' ? ($this->active ? 'true' : 'false') : false;
  }

  public function isExpanded()
  {
    return $this->toggle === 'collapse' ? ($this->expanded ? 'true' : 'false') : false;
  }
}
