<div class="border-b border-neutral-200 dark:border-neutral-800">
    <details class="group peer">
        <summary class="py-4 font-medium cursor-pointer text-neutral-900 hover:text-neutral-600 dark:text-neutral-50 dark:hover:text-neutral-300 list-none flex justify-between items-center">
            {{ $title ?? 'Accordion Title' }}
        </summary>
    </details>
    <div class="grid grid-rows-[0fr] transition-[grid-template-rows] duration-300 peer-open:grid-rows-[1fr]">
        <div class="overflow-hidden">
            <div class="pb-4 text-neutral-600 dark:text-neutral-300">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
