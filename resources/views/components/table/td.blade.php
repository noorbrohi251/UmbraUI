@php
$align = $attributes->get('align', 'left');
$wrap = $attributes->get('wrap', true);

$alignClasses = [
    'left' => 'text-left',
    'center' => 'text-center',
    'right' => 'text-right',
];

$alignClass = $alignClasses[$align] ?? $alignClasses['left'];

$baseClasses = [
    'px-4 py-3',
    'text-neutral-700 dark:text-neutral-300',
    $alignClass
];

if (!$wrap) {
    $baseClasses[] = 'whitespace-nowrap';
}
@endphp

<td {{ $attributes->except(['align', 'wrap'])->merge(['class' => implode(' ', $baseClasses)]) }}>
    {{ $slot }}
</td>