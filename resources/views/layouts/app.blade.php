@php
    $pageTitle = trim((string) $__env->yieldContent('title')) ?: 'Home';
@endphp

<x-layouts.app :title="$pageTitle">
    @yield('content')
</x-layouts.app>
