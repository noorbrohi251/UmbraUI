@props([
    'value' => ''
])

<button 
    type="button" 
    role="tab"
    x-on:click="activeTab = '{{ $value }}'"
    :aria-selected="activeTab === '{{ $value }}'"
    :class="activeTab === '{{ $value }}' ? 
        'bg-neutral-900 text-neutral-50 dark:bg-neutral-50 dark:text-neutral-950' : 
        'text-neutral-700 hover:bg-neutral-200 dark:text-neutral-400 dark:hover:bg-neutral-700'"
    class="px-4 py-2 text-sm font-medium rounded-lg transition-all duration-200">
    {{ $slot }}
</button>