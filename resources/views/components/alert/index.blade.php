@php
$type = $attributes->get('type', 'info');

$variants = [
    'success' => [
        'wrapper' => 'bg-green-50 border-green-200 dark:bg-green-950/20 dark:border-green-800',
        'icon' => 'text-green-500 dark:text-green-400',
        'title' => 'text-green-800 dark:text-green-200',
        'content' => 'text-green-700 dark:text-green-300'
    ],
    'error' => [
        'wrapper' => 'bg-red-50 border-red-200 dark:bg-red-950/20 dark:border-red-800',
        'icon' => 'text-red-500 dark:text-red-400',
        'title' => 'text-red-800 dark:text-red-200',
        'content' => 'text-red-700 dark:text-red-300'
    ],
    'warning' => [
        'wrapper' => 'bg-yellow-50 border-yellow-200 dark:bg-yellow-950/20 dark:border-yellow-800',
        'icon' => 'text-yellow-500 dark:text-yellow-400',
        'title' => 'text-yellow-800 dark:text-yellow-200',
        'content' => 'text-yellow-700 dark:text-yellow-300'
    ],
    'info' => [
        'wrapper' => 'bg-blue-50 border-blue-200 dark:bg-blue-950/20 dark:border-blue-800',
        'icon' => 'text-blue-500 dark:text-blue-400',
        'title' => 'text-blue-800 dark:text-blue-200',
        'content' => 'text-blue-700 dark:text-blue-300'
    ]
];

$variant = $variants[$type] ?? $variants['info'];

$icons = [
    'success' => '<svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>',
    'error' => '<svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" /></svg>',
    'warning' => '<svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" /></svg>',
    'info' => '<svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" /></svg>'
];

$showIcon = $attributes->get('show-icon', true);
$dismissible = $attributes->get('dismissible', false);
@endphp

<div {{ $attributes->except(['type', 'show-icon', 'dismissible'])->merge(['class' => 'border rounded-lg p-4 ' . $variant['wrapper']]) }} 
     @if($dismissible) x-data="{ show: true }" x-show="show" x-transition @endif>
    <div class="flex">
        @if($showIcon)
        <div class="flex-shrink-0">
            <span class="{{ $variant['icon'] }}">
                {!! $icons[$type] ?? $icons['info'] !!}
            </span>
        </div>
        @endif
        
        <div class="{{ $showIcon ? 'ml-3' : '' }} flex-1">
            @if(isset($title))
            <h3 class="text-sm font-medium {{ $variant['title'] }} mb-1">
                {{ $title }}
            </h3>
            @endif
            
            <div class="text-sm {{ $variant['content'] }}">
                {{ $slot }}
            </div>
            
            @if(isset($actions))
            <div class="mt-3">
                {{ $actions }}
            </div>
            @endif
        </div>
        
        @if($dismissible)
        <div class="ml-auto pl-3">
            <div class="-mx-1.5 -my-1.5">
                <button type="button" 
                        @click="show = false"
                        class="inline-flex rounded-md p-1.5 {{ $variant['icon'] }} hover:bg-black/5 dark:hover:bg-white/5 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-transparent focus:ring-current">
                    <span class="sr-only">Dismiss</span>
                    <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
        @endif
    </div>
</div>