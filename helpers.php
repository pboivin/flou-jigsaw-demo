<?php

use Pboivin\Flou\ImageFactory;

if (!function_exists('flou')) {
    /**
     * Initialize and return the global `ImageFactory` instance.
     *
     * @see https://github.com/pboivin/flou#getting-started
     */
    function flou(): ImageFactory
    {
        static $flou;

        if (!$flou) {
            $flou = new ImageFactory([
                'sourcePath' => __DIR__ . '/source/assets/images',
                'cachePath' => __DIR__ . '/source/assets/cache',
                'sourceUrlBase' => '/assets/images',
                'cacheUrlBase' => '/assets/cache',
            ]);
        }

        return $flou;
    }
}
