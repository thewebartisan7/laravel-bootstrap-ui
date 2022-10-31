<?php

declare(strict_types=1);

namespace Laraloop\UI\Components\Breadcrumbs;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class BreadcrumbItem extends Component
{
  /** @var string|null */
  public $href;

  /** @var string|null */
  public $to;

  /** @var array|string */
  public $params;

  /** @var bool */
  public $active;

  /** @var string|null */
  public $label;

  /**
   * @param string|null $href
   * @param string|null $to
   * @param array $params
   * @param bool $active
   * @param string|null $label
   */
  public function __construct(
    ?string $href = null,
    ?string $to = null,
            $params = [],
    bool    $active = false,
    ?string $label = null
  )
  {
    $this->href = $href;
    $this->to = $to;
    $this->params = $params;
    $this->active = $active;
    $this->label = $label;
  }

  public function render(): View
  {
    return view('ui::breadcrumb.item');
  }

  public function isActiveWithoutLink()
  {
    return ($this->active && empty($this->to) && empty($this->href));
  }
}
