<?php

namespace Laraloop\UI\Components\Layouts;

use Illuminate\View\Component;

class Base extends Component
{
  /**
   * App stimulus controller.
   *
   * @var string
   */
  public $controller;

  /** @var string */
  public $title;

  /** @var string */
  public $description;

  /** @var string|null */
  public $root;

  /** @var string */
  public $css = '/css/app.css';

  /** @var string */
  public $js = '/js/app.js';

  /**
   * Create a new component instance.
   *
   * @param string|null $controller
   * @param string $title
   * @param string $description
   * @param string|null $root
   * @param string $css
   * @param string $js
   */
  public function __construct(
    ?string $controller = 'app',
    string  $title = '',
    string  $description = '',
    ?string $root = null,
    string  $css = '/css/app.css',
    string  $js = '/js/app.js'
  )
  {
    $this->controller = $controller;
    $this->title = $title;
    $this->description = $description;
    $this->root = $root;
    $this->css = $css;
    $this->js = $js;
  }

  /**
   * Get the title of page for head tag title.
   *
   * @return string
   */
  public function headTitle(): string
  {
    return empty($this->title)
      ? config('app.name')
      : ($this->title . ' | ' . config('app.name'));
  }

  /**
   * Get the value for lang attribute
   *
   * @return string
   */
  public function locale(): string
  {
    return str_replace('_', '-', app()->getLocale());
  }

  /**
   * @return string
   */
  public function render(): string
  {
    return 'ui::layout.base';
  }
}
