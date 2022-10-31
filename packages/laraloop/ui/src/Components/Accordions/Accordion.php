<?php

declare(strict_types=1);

namespace Laraloop\UI\Components\Accordions;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;

class Accordion extends Component
{
  /** @var string|null */
  public $id;

  /** @var bool */
  public $flush;

  /** @var bool */
  public $alwaysOpen;

  /**
   * @param string $id
   * @param bool $flush
   * @param bool $alwaysOpen
   */
  public function __construct(?string $id = null, bool $flush = false, bool $alwaysOpen = false)
  {
    $this->id = $id ?: 'accordion-'.Str::random(20);
    $this->flush = $flush;
    $this->alwaysOpen = $alwaysOpen;
  }

  public function render(): View
  {
    return view('ui::accordion.index');
  }
}
