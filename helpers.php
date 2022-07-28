<?php

function flou()
{
    static $flou;

    if (!$flou) {
        $flou = new \Pboivin\Flou\ImageFactory([
            'sourcePath' => __DIR__ . '/source/assets/images',
            'cachePath' => __DIR__ . '/source/assets/cache',
            'sourceUrlBase' => '/assets/images',
            'cacheUrlBase' => '/assets/cache',
        ]);
    }

    return $flou;
}
