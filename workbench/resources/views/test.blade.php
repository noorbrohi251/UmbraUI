<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>UmbraUI Components</title>
</head>
<body>
<div class="flex flex-col items-center justify-center min-h-screen bg-white dark:bg-black space-y-6 ">
    <!-- Button -->
    <x-button>Button Works!</x-button>

    <!-- Inputs -->
    <x-input type="text" name="text" placeholder="Text input"/>
    <x-input type="email" name="email" placeholder="Email input"/>
    <x-input type="password" name="password" placeholder="Password input"/>
    <x-input type="search" name="search" placeholder="Search input"/>
    <x-input type="tel" name="tel" placeholder="Phone input"/>
    <x-input type="url" name="url" placeholder="URL input"/>
    <x-input type="number" name="number" placeholder="Number input"/>
    <!-- Textarea -->
    <x-textarea></x-textarea>

    <!-- Select -->
    <x-select>
        <option value="" class="text-neutral-500">Select an option...</option>
        <option value="option1">Option 1</option>
        <option value="option2">Option 2</option>
        <option value="option3">Option 3</option>
    </x-select>
    <!-- Checkbox -->
    <div class="flex items-center space-x-2 max-w-md">
        <x-checkbox id="test" name="test"/>
        <x-label for="test">
            Test
        </x-label>
    </div>

    <!-- Switch -->
    <div class="flex items-center space-x-2 max-w-md">
        <x-switch id="switch1" name="switch1"/>
        <x-label :clickable="false">
            Switch Toggle
        </x-label>
    </div>

    <!-- Slider -->
    <div class="max-w-md w-full">
        <x-slider min="0" max="100" value="50" name="slider1"/>
    </div>

    <!-- Date Picker -->
    <x-date-picker name="date1" value="2025-01-15"/>

    <!-- Form Fields -->
    <x-field label="Email Address" name="email" error="This field is required">
        <x-input type="email" name="email" placeholder="Enter your email"/>
    </x-field>

    <x-field label="Password" name="password" helper="Must be at least 8 characters">
        <x-input type="password" name="password" placeholder="Enter password"/>
    </x-field>

    <x-field label="Newsletter">
        <div class="flex items-center space-x-2">
            <x-switch id="newsletter" name="newsletter"/>
            <x-label :clickable="false">Subscribe to newsletter</x-label>
        </div>
    </x-field>

    <!-- Radio buttons -->
    <div class="space-y-2 max-w-md">
        <div class="flex items-center space-x-2">
            <x-radio id="1" name="name" value="test"/>
            <x-label for="radio">
                Radio option 1
            </x-label>
        </div>
        <div class="flex items-center space-x-2">
            <x-radio id="1" name="name" value="test"/>
            <x-label for="radio">
                Radio option 1
            </x-label>
        </div>
        <div class="flex items-center space-x-2">
            <x-radio id="1" name="name" value="test"/>
            <x-label for="radio">
                Radio option 1
            </x-label>
        </div>
    </div>

    <!-- Accordion -->
    <div class="w-full max-w-md space-y-4">
        <x-accordion>
            <x-slot name="title">Первый аккордион</x-slot>
            Это содержимое первого аккордиона. Здесь может быть любой контент - текст, изображения, формы и т.д.
        </x-accordion>

        <x-accordion>
            <x-slot name="title">Второй аккордион</x-slot>
            Содержимое второго аккордиона с <strong>форматированным текстом</strong> и другими элементами.
        </x-accordion>

        <x-accordion>
            <x-slot name="title">Третий аккордион</x-slot>
            <p>Третий аккордион может содержать:</p>
            <ul class="list-disc list-inside mt-2 space-y-1">
                <li>Списки</li>
                <li>Параграфы</li>
                <li>Любой другой HTML контент</li>
            </ul>
        </x-accordion>
    </div>
</div>
</body>
</html>
