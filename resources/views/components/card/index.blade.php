<div {{ $attributes->merge(['class' => 'bg-white dark:bg-neutral-950 border-2 border-neutral-200 dark:border-neutral-800 rounded-lg shadow-sm dark:shadow-neutral-900/10 overflow-hidden']) }}>
    @if(isset($image))
    <div class="w-full overflow-hidden group">
        <div class="transition-transform duration-300 group-hover:scale-105">
            {{ $image }}
        </div>
    </div>
    @endif

    <div class="p-6">
        @if(isset($header))
        <div class="mb-4 pb-4 border-b border-neutral-200 dark:border-neutral-800">
            {{ $header }}
        </div>
        @endif

        <div>
            {{ $slot }}
        </div>

        @if(isset($footer))
        <div class="mt-4 pt-4 border-t border-neutral-200 dark:border-neutral-800">
            {{ $footer }}
        </div>
        @endif
    </div>
</div>