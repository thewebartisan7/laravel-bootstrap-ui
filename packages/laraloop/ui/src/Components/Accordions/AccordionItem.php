<?php

declare(strict_types=1);

namespace Laraloop\UI\Components\Accordions;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;

class AccordionItem extends Component
{
  /** @var string */
  public $title;

  /** @var string|null */
  public $id;

  /** @var bool */
  public $show;

  /** @var string */
  public $collapse;

  /** @var string */
  public $heading;

  /**
   * Exclude the $id because we are setting custom ID from this.
   * Apart from that, it's important also because the $id of
   * x-accordion component is passed via @aware, then we don't
   * want to override it. In a few words: don't remove it.
   *
   * @var array
   */
  protected $except = ['id'];

  /**
   * @param string $title
   * @param string|null $id
   * @param bool $show
   */
  public function __construct(string $title, ?string $id = null, bool $show = false)
  {
    $this->title = $title;
    $this->id = $id ?: Str::random(20);
    $this->collapse = "collapse-$this->id";
    $this->heading = "heading-$this->id";
    $this->show = $show;
  }

  public function render(): View
  {
    return view('ui::accordion.item');
  }
}
