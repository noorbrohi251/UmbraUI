@php
$align = $attributes->get('align', 'left');

$alignClasses = [
    'left' => 'text-left',
    'center' => 'text-center', 
    'right' => 'text-right',
];

$alignClass = $alignClasses[$align] ?? $alignClasses['left'];

$baseClasses = [
    'px-4 py-3',
    'font-semibold text-neutral-900 dark:text-neutral-50',
    'uppercase tracking-wider',
    $alignClass
];
@endphp

<th 
    {{ $attributes->except(['align'])->merge([
        'class' => implode(' ', $baseClasses),
        'scope' => 'col'
    ]) }}
>
    {{ $slot }}
</th>