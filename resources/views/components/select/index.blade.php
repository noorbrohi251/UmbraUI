<select {{ $attributes->merge([
    'class' => 'px-4 py-2 border-2 border-neutral-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-neutral-600 focus:ring-offset-2 focus:border-transparent transition-all duration-200 max-w-md w-full appearance-none bg-neutral-50 dark:bg-neutral-950 dark:border-neutral-800 dark:text-neutral-50 dark:focus:ring-neutral-300 dark:focus:border-neutral-300'
]) }}>
    {{ $slot }}
</select>