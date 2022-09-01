{{--
    Wrapper component to process and render image sets.

    @see https://github.com/pboivin/flou#working-with-image-sets-responsive-images
--}}

@props([
    'image',
    'sizes' => '100vw',
    'widths' => [500, 900, 1300, 1700],
    'imgAttributes' => [],
])

@php
    $imageSet = flou()->imageSet([
        'image' => $image,
        'sizes' => $sizes,
        'widths' => $widths,
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
