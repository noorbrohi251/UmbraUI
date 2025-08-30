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

    <!-- Input -->
    <x-input name="name" placeholder="write your text here"/>
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

</div>

</body>
</html>
