<?php

use function Pest\Laravel\blade;

test('link component renders correctly', function () {
    $component = blade('<x-umbra::link href="https://example.com">Test Link</x-umbra::link>');

    expect($component)
        ->toContain('href="https://example.com"')
        ->toContain('Test Link')
        ->toContain('text-neutral-900')
        ->toContain('hover:text-neutral-700')
        ->toContain('underline');
});

test('link component accepts custom attributes', function () {
    $component = blade('<x-umbra::link href="/home" class="custom-class" target="_blank">Home</x-umbra::link>');

    expect($component)
        ->toContain('href="/home"')
        ->toContain('target="_blank"')
        ->toContain('custom-class')
        ->toContain('Home');
});

test('link component supports dark mode classes', function () {
    $component = blade('<x-umbra::link href="#">Dark Link</x-umbra::link>');

    expect($component)
        ->toContain('dark:text-neutral-50')
        ->toContain('dark:hover:text-neutral-300');
});
