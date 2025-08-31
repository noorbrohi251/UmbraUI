<div {{ $attributes }} class="space-y-2 max-w-md w-full">
    @if(isset($label))
    <x-label>{{ $label }}</x-label>
    @endif
    
    {{ $slot }}
    
    @if(isset($error))
    <p class="text-sm text-red-600 dark:text-red-400">{{ $error }}</p>
    @endif
    
    @if(isset($helper))
    <p class="text-sm text-neutral-500 dark:text-neutral-400">{{ $helper }}</p>
    @endif
</div>