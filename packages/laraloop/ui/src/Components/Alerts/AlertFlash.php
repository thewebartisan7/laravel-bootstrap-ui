<?php

declare(strict_types=1);

namespace Laraloop\UI\Components\Alerts;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Illuminate\View\Component;

/**
 * @see https://getbootstrap.com/docs/5.1/components/alerts
 */
class AlertFlash extends Component
{
    /** @var string */
    public $icon = null;

    /** @var bool */
    public $dismissible;

    /** @var string */
    protected $type;

    /** @var array */
    protected $types = [
        'primary' => 'primary',
        'alert' => 'primary',
        'secondary' => 'secondary',
        'info' => 'info',
        'success' => 'success',
        'warning' => 'warning',
        'status' => 'warning',
        'error' => 'danger',
        'danger' => 'danger',
        'light' => 'light',
        'dark' => 'dark',
    ];

    /** @var array */
    protected $icons = [
        'info' => 'info-circle-fill',
        'success' => 'check-circle-fill',
        'warning' => 'exclamation-circle-fill',
        'status' => 'exclamation-circle-fill',
        'error' => 'exclamation-triangle-fill',
        'danger' => 'exclamation-triangle-fill',
    ];

    /**
     * @param string $type
     * @param bool|string $icon 'true' show automatically from $type, 'false' disable or 'string' as custom icon name
     * @param bool $dismissible
     */
    public function __construct(
        string $type        = 'warning',
        $icon               = false,
        bool $dismissible   = false
    ) {
        $this->type = $type;
        $this->dismissible = $dismissible;

        if($icon) {
            $this->icon = is_string($icon) ? $icon : ($this->icons[$type] ?? null);
        }
    }

    public function render()
    {
        if ($this->has()) {
            return view('ui::alert.flash', [
                'type' => $this->types[$this->type] ?? 'warning'
            ]);
        }

        return '';
    }

    public function has(): bool
    {
        return session()->has($this->type) && ! empty(session()->get($this->type));
    }

    public function message(): string
    {
        return (string) Arr::first((array) session()->pull($this->type));
    }

    public function messages(): array
    {
        return (array) session()->pull($this->type);
    }
}
