@extends('_layouts.main')

@section('body')
<div class="p-8">
    <h1 class="text-center text-3xl font-bold">Hello World!</h1>

    <div class="mt-8 lg:w-1/2 lg:mx-auto">
        <x-imageset
            image="rohit-tandon-01.jpg"
            sizes="(max-width: 1024px) 100vw, 50vw"
            :img-attributes="[
                'class' => 'w-full',
                'alt' => 'Lorem ipsum dolor sit amet',
            ]"
        />
    </div>
</div>
@endsection
