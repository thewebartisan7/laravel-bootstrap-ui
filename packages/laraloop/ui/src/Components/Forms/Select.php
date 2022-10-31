<?php

declare(strict_types=1);

namespace Laraloop\UI\Components\Forms;

use Illuminate\Support\Arr;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Select extends Component
{
  /** @var array */
  public $options;

  /** @var string|array|null */
  public $selected;

  /** @var bool */
  public $small;

  /** @var bool */
  public $large;

  /** @var bool */
  public $hasError;

  /** @var bool */
  public $isAssoc;

  /**
   * @param string $title
   * @param string|null $id
   * @param bool $show
   */
  public function __construct(
    array   $options = [],
            $selected = null,
    bool    $small = false,
    bool    $large = false,
    bool    $hasError = false
  )
  {
    $this->options = $options;
    $this->selected = Arr::wrap($selected);
    $this->isAssoc = Arr::isAssoc($options);
    $this->small = $small;
    $this->large = $large;
    $this->hasError = $hasError;
  }

  public function render(): View
  {
    return view('ui::form.select');
  }

  public function isSelected($value)
  {
    return in_array($value, $this->selected);
  }
}
