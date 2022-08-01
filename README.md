# flou-jigsaw-demo

Example project integrating [Flou](https://github.com/pboivin/flou) with the [Jigsaw](https://github.com/tighten/jigsaw) PHP static site generator. Adds image lazy loading and responsive image variations.


## Getting Started

```
composer install
vendor/bin/jigsaw build
vendor/bin/jigsaw serve 
```

The demo will be accessible at [http://localhost:8000/](http://localhost:8000/)


## Details

- [`helpers.php`](./helpers.php): <br>Adds a `flou()` helper function to initialize and access the global `ImageFactory` instance.

- [`source/_components/imageset.blade.php`](./source/_components/imageset.blade.php): <br>Blade component to process and render a set of responsive images.

- [`source/index.blade.php`](./source/index.blade.php): <br>Index page where the `<x-imageset>` component is used.
