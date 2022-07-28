@props([
    'image',
    'sizes' => '100vw',
    'sources' => [
        ['width' => '500'],
        ['width' => '900'],
        ['width' => '1300'],
        ['width' => '1700'],
    ],
    'imgAttributes' => [],
])

{!! flou()
        ->imageSet([
            'image' => $image,
            'sizes' => $sizes,
            'sources' => $sources,
        ])
        ->render()
        ->useAspectRatio()
        ->useWrapper()
        ->img($imgAttributes);
!!}
