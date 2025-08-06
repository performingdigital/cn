# Cn php

Simple tailwind merge wrapper for php that converts conditional classes into a single string.

It's using `gehrisandro/tailwind-merge-php` to merge tailwind classes.

```php
use Performing\Cn\Cn;

$isDark = true;
Cn::merge('p-1 bg-red-500', ['text-white bg-blue-500' => $isDark]);
// p-1 text-white bg-blue-500

$isDark = false;
Cn::merge('p-1 bg-red-500', ['text-white bg-blue-500' => $isDark]);
// p-1 bg-red-500
```
