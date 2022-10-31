<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Components
  |--------------------------------------------------------------------------
  |
  | Below you reference all components that should be loaded for your app.
  | By default all components from Blade UI Kit are loaded in. You can
  | disable or overwrite any component class or alias that you want.
  |
  */

  'components' => [
    // Usage
    // 'component-alias' => 'ComponentClassName OR path.to.component-view',

    //
    // Accordion
    //

    'accordion' => \Laraloop\UI\Components\Accordions\Accordion::class,
    'accordion.item' => \Laraloop\UI\Components\Accordions\AccordionItem::class,

    //
    // Alert
    //

    'alert' => \Laraloop\UI\Components\Alerts\Alert::class,
    'alert.flash' => \Laraloop\UI\Components\Alerts\AlertFlash::class,

    //
    // Avatar
    //

    'avatar' => \Laraloop\UI\Components\Avatar::class,

    //
    // Badge
    //

    'badge' => \Laraloop\UI\Components\Badges\Badge::class,

    //
    // Breadcrumb
    //

    'breadcrumb' => \Laraloop\UI\Components\Breadcrumbs\Breadcrumb::class,
    'breadcrumb.item' => \Laraloop\UI\Components\Breadcrumbs\BreadcrumbItem::class,

    //
    // Button
    //

    'button' => \Laraloop\UI\Components\Buttons\Button::class,
    'button.link' => \Laraloop\UI\Components\Buttons\Link::class,
    'button.group' => 'ui::button.group',
    'button.input' => \Laraloop\UI\Components\Buttons\Input::class,
    'button.close' => 'ui::button.close',
    'button.logout' => 'ui::button.logout',
    'button.toolbar' => 'ui::button.toolbar',

    //
    // Card
    //

    'card' => 'ui::card.index',
    'card.body' => 'ui::card.body',
    'card.footer' => 'ui::card.footer',
    'card.header' => 'ui::card.header',
    'card.input' => 'ui::card.input',
    'card.group' => 'ui::card.group',

    //
    // Carousel
    //

    'carousel' => \Laraloop\UI\Components\Carousels\Carousel::class,
    'carousel.item' => \Laraloop\UI\Components\Carousels\CarouselItem::class,

    //
    // Collapse
    //

    'collapse' => \Laraloop\UI\Components\Collapses\Collapse::class,
    'collapse.content' => 'ui::collapse.content',

    //
    // Dropdown
    //

    'dropdown' => 'ui::dropdown.index',

    // Divider
    'dropdown.divider' => 'ui::dropdown.divider.index',
    'dropdown.divider.li' => 'ui::dropdown.divider.li',

    // Header
    'dropdown.header' => 'ui::dropdown.header.index',
    'dropdown.header.li' => 'ui::dropdown.header.li',

    // Item
    'dropdown.item' => 'ui::dropdown.item.index',
    'dropdown.item.a' => 'ui::dropdown.item.a',
    'dropdown.item.button' => 'ui::dropdown.item.button',
    'dropdown.item.li' => 'ui::dropdown.item.li',
    'dropdown.item.text' => 'ui::dropdown.item.text',

    // Menu
    'dropdown.menu' => 'ui::dropdown.menu.index',
    'dropdown.menu.ul' => 'ui::dropdown.menu.ul',

    // Toggle
    'dropdown.toggle' => 'ui::dropdown.toggle.index',
    'dropdown.toggle.a' => 'ui::dropdown.toggle.a',
    'dropdown.toggle.button' => 'ui::dropdown.toggle.button',
    'dropdown.toggle.split' => 'ui::dropdown.toggle.split',

    //
    // Favicons
    //

    'favicons' => 'ui::favicons',

    //
    // Form
    //

    'form' => 'ui::form.index',
    'form.feedback' => 'ui::form.feedback',
    'form.group' => 'ui::form.group',
    'form.horizontal' => 'ui::form.horizontal',
    'form.input' => 'ui::form.input',
    'form.label' => 'ui::form.label',
    'form.select' => \Laraloop\UI\Components\Forms\Select::class,
    'form.text' => 'ui::form.text',

    //
    // Google Font / Tag
    //
    'gfont' => 'ui::gfont',
    'gtag' => 'ui::gtag',

    //
    // Icon
    //

    'icon' => 'ui::icon.index',

    //
    // Layout
    //

    'html' => \Laraloop\UI\Components\Layouts\Base::class,
    'cover' => \Laraloop\UI\Components\Layouts\Cover::class,
    'app' => \Laraloop\UI\Components\Layouts\App::class,
    'auth' => \Laraloop\UI\Components\Layouts\Auth::class,
    'dashboard' => \Laraloop\UI\Components\Layouts\Dashboard::class,

    //
    // Link
    //

    'link' => \Laraloop\UI\Components\Link::class, // Used by other components, keep in mind if you rename alias to leave also this one

    //
    // List Group
    //

    'list-group' => 'ui::list-group.index',
    'list-group.div' => 'ui::list-group.div',
    'list-group.ul' => 'ui::list-group.ul',
    'list-group.item' => 'ui::list-group.item.index',
    'list-group.item.a' => 'ui::list-group.item.a',
    'list-group.item.button' => 'ui::list-group.item.button',
    'list-group.item.li' => 'ui::list-group.item.li',

    //
    // Modal
    //

    'modal' => 'ui::modal.index',
    'modal.body' => 'ui::modal.body',
    'modal.content' => 'ui::modal.content',
    'modal.dialog' => 'ui::modal.dialog',
    'modal.footer' => 'ui::modal.footer',
    'modal.form' => 'ui::modal.form',
    'modal.header' => 'ui::modal.header',
    'modal.toggle' => 'ui::modal.toggle.index',
    'modal.toggle.a' => 'ui::modal.toggle.a',

    //
    // Nav
    //

    'nav' => 'ui::nav.index',
    'nav.dropdown' => 'ui::nav.dropdown',
    'nav.li' => 'ui::nav.li',
    'nav.link' => 'ui::nav.link',
    'nav.ul' => 'ui::nav.ul',
    'nav.scroller' => 'ui::nav.scroller',

    //
    // Navbar
    //

    'navbar' => 'ui::navbar.index',
    'navbar.collapse' => 'ui::navbar.collapse',
    'navbar.nav' => 'ui::navbar.nav',
    'navbar.text' => 'ui::navbar.text',
    'navbar.toggler' => 'ui::navbar.toggler',
    'navbar.main' => 'ui::navbar.main',
    'navbar.brand' => 'ui::navbar.brand.index',
    'navbar.brand.heading' => 'ui::navbar.brand.heading',

    //
    // Offcanvas
    //

    'offcanvas' => 'ui::offcanvas.index',
    'offcanvas.body' => 'ui::offcanvas.body',
    'offcanvas.header' => 'ui::offcanvas.header',
    'offcanvas.toggle' => 'ui::offcanvas.toggle.index',
    'offcanvas.toggle.a' => 'ui::offcanvas.toggle.a',

    //
    // Pagination
    //

    'pagination' => 'ui::pagination.index',
    'pagination.item' => 'ui::pagination.item',

    //
    // Popover
    //

    'popover' => 'ui::popover',

    //
    // Progress
    //

    'progress' => 'ui::progress.index',
    'progress.bar' => 'ui::progress.bar',

    //
    // Sidebar
    //

    'sidebar' => 'ui::sidebar.index',
    'sidebar.nav.index' => 'ui::sidebar.nav.index',
    'sidebar.nav.collapsible' => 'ui::sidebar.nav.collapsible',
    'sidebar.nav.link' => 'ui::sidebar.nav.link',

    //
    // Seo
    //

    'seo' => 'ui::seo',

    //
    // Spinner
    //

    'spinner' => 'ui::spinner.index',

    //
    // Tab
    //

    'tab' => 'ui::tab.index',
    'tab.content' => 'ui::tab.content',
    'tab.link' => 'ui::tab.link',
    'tab.nav' => 'ui::tab.nav',
    'tab.pane' => 'ui::tab.pane',

    //
    // Table
    //

    'table' => 'ui::table.index',

    //
    // Toast
    //

    'toast' => 'ui::toast.index',
    'toast.header' => 'ui::toast.header',
    'toast.body' => 'ui::toast.body',

    //
    // Tooltip
    //

    'tooltip' => 'ui::tooltip',
  ],

  /*
  |--------------------------------------------------------------------------
  | Components Prefix
  |--------------------------------------------------------------------------
  |
  | This value will set a prefix for all Blade UI Kit components.
  | By default it's empty. This is useful if you want to avoid
  | collision with components from other libraries.
  |
  | If set with "buk", for example, you can reference components like:
  |
  | <x-buk-easy-mde />
  |
  */

  'prefix' => '',

];
