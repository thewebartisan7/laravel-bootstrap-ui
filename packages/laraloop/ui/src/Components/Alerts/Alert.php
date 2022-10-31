<?php

declare(strict_types=1);

namespace Laraloop\UI\Components\Alerts;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

/**
 * @see https://getbootstrap.com/docs/5.1/components/alerts
 */
class Alert extends Component
{
    /** @var string */
    public $type;

    /** @var string */
    public $title;

    /** @var string */
    public $message;

    /** @var string */
    public $icon = null;

    /** @var array */
    private $icons = [
        'info' => 'info-circle-fill',
        'success' => 'check-circle-fill',
        'warning' => 'exclamation-circle-fill',
        'danger' => 'exclamation-triangle-fill',
    ];

    /** @var bool */
    public $dismissible;

    /**
     * @param string $type
     * @param string|null $title
     * @param string|null $message
     * @param bool|string $icon 'true' show automatically from $type, 'false' disable or 'string' as custom icon name
     * @param bool $dismissible
     */
    public function __construct(
        string $type = 'primary',
        ?string $title = null,
        ?string $message = null,
        $icon = false,
        bool $dismissible = false
    ) {
        $this->type = $type;
        $this->title = $title;
        $this->message = $message;
        $this->dismissible = $dismissible;

        if (!$title && $icon) {
            $this->icon = is_string($icon) ? $icon : ($this->icons[$type] ?? null);
        }
    }

    public function render(): View
    {
        return view('ui::alert.index');
    }
}
