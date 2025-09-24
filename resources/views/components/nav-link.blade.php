@props(['active' => false])
@php
    $current = 'text-white border-b-3 border-blue-950';
    $default = 'text-white/50 hover:text-white';
 @endphp
<a class="px-3 py-2 text-sm font-medium  {{ $active ? $current : $default }}" {{ $attributes }}>
    {{ $slot }}
</a>
