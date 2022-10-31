<?php

declare(strict_types=1);

namespace Laraloop\UI\Components\Carousels;

use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Carousel extends Component
{
  /** @var string */
  public $id;

  /** @var bool */
  public $controls;

  /** @var int|null */
  public $indicators;

  /** @var bool */
  public $crossfade;

  /** @var bool|null */
  public $touch;

  /** @var bool */
  public $dark;

  /** @var string|bool|null */
  public $interval;

  /**
   * @param string $id
   * @param bool $controls
   * @param int|null $indicators
   * @param bool $crossfade
   * @param bool|null $touch
   * @param bool $dark
   * @param null $interval
   */
  public function __construct(
    string  $id = '',
    bool    $controls = false,
    ?int    $indicators = null,
    bool    $crossfade = false,
    ?bool   $touch = null,
    bool    $dark = false,
            $interval = null
  )
  {
    $this->id = $id ?: 'carousel-' . Str::random(20);
    $this->controls = $controls;
    $this->indicators = $indicators;
    $this->crossfade = $crossfade;
    $this->touch = $touch;
    $this->dark = $dark;
    $this->interval = $interval;
  }

  public function render(): View
  {
    return view('ui::carousel.index');
  }

  public function ride(): ?string
  {
    return ($this->interval === false) ? null : 'carousel';
  }

  public function touch(): ?string
  {
    return ($this->touch === false) ? 'false' : null;
  }

  public function interval()
  {
    return $this->interval === false ? 'false' : $this->interval;
  }
}
