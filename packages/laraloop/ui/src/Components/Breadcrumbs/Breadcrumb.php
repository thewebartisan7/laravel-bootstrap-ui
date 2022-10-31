<?php

declare(strict_types=1);

namespace Laraloop\UI\Components\Breadcrumbs;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Breadcrumb extends Component
{
  /** @var array */
  public $links;

  /** @var string|null */
  public $label;

  /** @var string|null */
  public $divider;

  /**
   * Format of links should be an array of array like:
   *
   * [
   *   'href' => null,
   *   'to' => null,
   *   'params' => [],
   *   'active' => false,
   *   'label' => null
   * ]
   * @param array $links
   * @param string|null $label
   * @param string|null $divider
   */
  public function __construct(array $links = [], ?string $label = null, ?string $divider = null)
  {
    $this->links = $links;
    $this->label = $label;
    $this->divider = $divider;
  }

  public function render(): View
  {
    return view('ui::breadcrumb.index');
  }
}
