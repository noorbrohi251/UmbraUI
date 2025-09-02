{{-- Shared item content template to eliminate duplication --}}
@isset($icon)
    <span class="flex-shrink-0 w-4 h-4" aria-hidden="true">
        {{ $icon }}
    </span>
@endisset

<span class="flex-1">{{ $slot }}</span>

@isset($shortcut)
    <span class="text-xs text-neutral-500 dark:text-neutral-400" aria-label="Keyboard shortcut">
        {{ $shortcut }}
    </span>
@endisset