@props([
    'defaultTab' => null
])

<div class="w-full" x-data="{ activeTab: '{{ $defaultTab }}' }">
    {{ $slot }}
</div>