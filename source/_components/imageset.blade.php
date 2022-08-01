{{--
    Wrapper component to process and render image sets.

    @see https://github.com/pboivin/flou#working-with-image-sets-responsive-images
--}}

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

@php
    $imageSet = flou()->imageSet([
        'image' => $image,
        'sizes' => $sizes,
        'sources' => $sources,
    ]);
@endphp

{!! $imageSet
        ->render()
        ->useAspectRatio()
        ->useWrapper()
        ->img($imgAttributes);
!!}
<noscript>
    {!! $imageSet
            ->render()
            ->useAspectRatio()
            ->noScript($imgAttributes);
    !!}
</noscript>
