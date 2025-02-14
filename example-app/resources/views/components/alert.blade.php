@props(['type' => 'info'])

@php
    switch ($type) {
        case 'info':
            $class = 'text-blue-800  bg-blue-50 dark:bg-gray-800 dark:text-blue-400"';
            break;
        case 'danger':
            $class = 'text-red-800  bg-red-50 dark:bg-gray-800 dark:text-blue-400"';
            break;
        case 'success':
             $class = 'text-green-800  bg-green-50 dark:bg-gray-800 dark:text-blue-400"';
            break;
        case 'warning':
            $class = 'text-yellow-800  bg-yellow-50 dark:bg-gray-800 dark:text-blue-400"';
            break;
        case 'dark':
            $class = 'text-black-800  bg-black-50 dark:bg-gray-800 dark:text-blue-400"';
            break;
        default:
            $class = 'text-blue-800  bg-blue-50 dark:bg-gray-800 dark:text-blue-400"';
            break;
    }
@endphp
<div class="{{$class}}" {{$attributes->merge(['class'=>'p-4 text-sm rounded-lg' . $class])}}role="alert">
    <span class="font-medium">{{ $title ?? 'Info Alert!' }}</span> {{ $slot }}
</div>
