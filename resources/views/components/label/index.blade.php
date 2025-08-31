@if($clickable ?? true)
<label {{ $attributes->merge(['class' => 'text-neutral-900 dark:text-neutral-50 cursor-pointer']) }}>{{ $slot }}</label>
@else
<span {{ $attributes->merge(['class' => 'text-neutral-900 dark:text-neutral-50']) }}>{{ $slot }}</span>
@endif
