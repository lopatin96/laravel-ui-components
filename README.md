# Installation
To use some components (e.g. `popover`) you should to install preline (instruction for Laravel framework https://preline.co/docs/frameworks-laravel.html).

# Components
## Breadcrumbs
```html
<x-laravel-breadcrumbs::breadcrumbs :breadcrumbs="[
    [
        'title' => __('Go dashboard'),
        'route' => 'dashboard',
    ],
    [
        'title' => __('Edit') . ': <b>#' . $link->hash . '</b>',
    ]
]"
/>
```

# Publishing
### Views
```php
php artisan vendor:publish --tag="laravel-ui-components-views"
```
