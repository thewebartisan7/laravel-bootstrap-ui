<?php

namespace Laraloop\UI\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Storage;

class Avatar extends Component
{
    /** @var string */
    public $name;

    /** @var string */
    public $status;

    /** @var string */
    public $initials;

    /** @var string */
    public $src;

    /** @var string */
    public $size;

    /** @var string */
    public $url;

    /** @var string */
    public $color;

    /** @var string */
    public $bg;

    /** @var string */
    public $classes = '';

    /**
     * Create the component instance.
     *
     * @param string|null $name
     * @param string|null $status
     * @param string|null $initials
     * @param string|null $src
     * @param string|null $size
     * @param string|null $url
     * @param string|null $color
     * @param string|null $bg
     * @return void
     */
    public function __construct(
        ?string $name = null,
        ?string $status = null,
        ?string $initials = null,
        ?string $src = null,
        ?string $size = null,
        ?string $url = null,
        string $color = '5e81ac',
        string $bg = 'eceff4'
    ) {
        // one of this three are mandatory
        $this->name = $name;
        $this->initials = $initials;
        $this->src = $src;

        // Link to user profile
        $this->url = $url;

        // user status
        $this->status = $status;

        // for .avatar-{sm|md|lg|xl} sizes
        $this->size = $size;

        // for ui-avatars
        $this->color = $color;
        $this->bg = $bg;

        if ($this->src) {
            // 1. If src was set, means avatar exist in database so we are using it

            if (!filter_var($this->src, FILTER_VALIDATE_URL)) {
                $this->src = Storage::disk(config('loop.filesystem_disk'))->url($this->src);
            }

            // Disable initials
            $this->initials = null;

        } else if (!$this->initials) {
            // 2. Using ui-avatars or .avatar-default

            if($this->name) {
                // Use ui-avatars when we have name
                $this->src = "https://ui-avatars.com/api/?name=".urlencode($this->name)."&color={$this->color}&background={$this->bg}&size=128";

            } else {
                // Otherwise use default image by adding class .avatar-default
                $this->classes .= ' avatar-default ';
            }
        }

        if($this->size) $this->classes .= " avatar-{$this->size} ";

        // 3. Nothing to do when using initials from database
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('ui::avatar');
    }
}
