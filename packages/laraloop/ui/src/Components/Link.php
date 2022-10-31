<?php

declare(strict_types=1);

namespace Laraloop\UI\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

class Link extends Component
{
  /** @var string */
  public $to;

  /** @var array|string */
  public $params;

  /** @var bool */
  public $disabled;

  /** @var bool|int */
  public $signed;

  /** @var string */
  public $active;

  /** @var bool */
  public $exact;

  /** @var string|bool */
  public $current;

  /** @var bool */
  public $isActive;

  /** @var bool */
  private $isRouteName;

  /**
   * @param string $to
   * @param array|string $params
   * @param bool $disabled
   * @param bool|int $signed
   * @param string $active
   * @param bool $exact
   */
  public function __construct(
    string $to = '',
           $params = [],
    bool   $disabled = false,
           $signed = false,
           $current = 'page',
    string $active = 'active',
    bool   $exact = false
  )
  {
    $this->to = rtrim($to, '/');
    $this->params = $params;
    $this->disabled = $disabled;
    $this->signed = $signed;
    $this->active = $active;
    $this->exact = $exact;
    if (
      !$this->isRouteName = Route::has($this->to)
        && !filter_var($this->to, FILTER_VALIDATE_URL)
    ) {
      $this->to = ltrim($this->to, '/');

      // When provided $to is not a route name nor a full url, then append host
      $this->to = rtrim(Request::root() . '/' . $this->to, '/');
    }

    $this->isActive = $this->isCurrentUrl();
    $this->current = $this->isActive ? ($current === true ? 'true' : $current) : null; // For aria-current="page" or aria-current="true"
  }

  public function render(): View
  {
    return view('ui::link');
  }

  public function url()
  {
    return ($this->signed && $this->isRouteName)
      ? $this->getSignedUrl()
      : $this->getUrl();
  }

  private function isCurrentUrl()
  {
    if ($this->exact) {

      return $this->isRouteName
        ? Route::currentRouteName() === $this->to
        : URL::full() === $this->to;
    }

    $path = filter_var($this->to, FILTER_VALIDATE_URL)
      ? ltrim(parse_url($this->to)['path'] ?? '', '/')
      : $this->to;

    return (empty($path) && empty(Request::segment(1)))
      || ($path === Request::segment(1));
  }

  private function getUrl()
  {
    return $this->isRouteName
      ? URL::route($this->to, $this->params)
      : $this->to;
  }

  private function getSignedUrl()
  {
    return is_bool($this->signed)
      ? URL::signedRoute($this->to)
      : URL::temporarySignedRoute($this->to, now()->addMinutes($this->signed), $this->params);
  }
}
