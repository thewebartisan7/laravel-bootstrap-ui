<?php

declare(strict_types=1);

namespace Laraloop\UI\Components\Carousels;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class CarouselItem extends Component
{
  /** @var string|null */
  public $src;

  /** @var string|null */
  public $alt;

  /** @var string|null */
  public $caption;

  /** @var string|null */
  public $interval;

  /** @var bool */
  public $active;

  /**
   * @param string|null $src
   * @param string|null $alt
   * @param string|null $caption
   * @param string|null $interval
   * @param bool $active
   */
  public function __construct(
    ?string $src = null,
    ?string $alt = null,
    ?string  $caption = null,
    ?string $interval = null,
    bool    $active = false
  )
  {
    $this->src = $src;
    $this->alt = $alt;
    $this->caption = $caption;
    $this->interval = $interval;
    $this->active = $active;
  }

  public function render(): View
  {
    return view('ui::carousel.item');
  }
}
