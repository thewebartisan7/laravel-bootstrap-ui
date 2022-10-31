<?php

declare(strict_types=1);

namespace Laraloop\UI\Components\Badges;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Badge extends Component
{
  /** @var string */
  public $color;

  /** @var string|null */
  public $title;

  /** @var bool */
  public $pill;

  /** @var bool */
  public $circle;

  /** @var string|bool */
  public $top;

  /** @var string|bool */
  public $end;

  /** @var string|bool */
  public $bottom;

  /** @var string|bool */
  public $start;

  /** @var string */
  public $position;

  /**
   * @param string $color
   * @param string|null $title
   * @param bool $pill
   * @param bool $circle
   * @param string|bool $top
   * @param string|bool $end
   * @param string|bool $bottom
   * @param string|bool $start
   */
  public function __construct(
    string  $color = 'primary',
    ?string $title = null,
    bool    $pill = false,
    bool    $circle = false,
            $top = false,
            $end = false,
            $bottom = false,
            $start = false
  )
  {
    $this->color = $color;
    $this->title = $title;
    $this->pill = $pill;
    $this->circle = $circle;
    $this->top = $top;
    $this->end = $end;
    $this->bottom = $bottom;
    $this->start = $start;
  }

  public function render(): View
  {
    return view('ui::badge.index');
  }

  public function hasPosition()
  {
    return ($this->top !== false || $this->start !== false || $this->end !== false || $this->bottom !== false);
  }
}
