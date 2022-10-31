<?php

declare(strict_types=1);

namespace Laraloop\UI\Components\Collapses;

use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Collapse extends Component
{
  /** @var string|null */
  public $id;

  /** @var string|null */
  public $content;

  /** @var string|null */
  public $button;

  /** @var string|null */
  public $link;

  /** @var string|null */
  public $color;

  /** @var string|null */
  public $size;

  /** @var bool */
  public $outline;

  /** @var bool */
  public $expanded;

  /**
   * @param string|null $id
   * @param string|null $content
   * @param string|null $button
   * @param string|null $link
   * @param string|null $color
   * @param string|null $size
   * @param bool $outline
   * @param bool $expanded
   */
  public function __construct(
    ?string $id = null,
    ?string $content = null,
    ?string $button = null,
    ?string $link = null,
    ?string $color = null,
    ?string $size = null,
    bool    $outline = false,
    bool    $expanded = false
  )
  {
    $this->id = $id ?: 'collapse-'.Str::random(20);
    $this->content = $content;
    $this->button = $button;
    $this->link = $link;
    $this->color = $color;
    $this->size = $size;
    $this->outline = $outline;
    $this->expanded = $expanded;
  }

  public function render(): View
  {
    return view('ui::collapse.index');
  }
}
