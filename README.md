# Array Toolkit

A simple PHP library for convenient array operations.

## Installation

You can install the package via composer:

```bash
composer require GameTookit/array-toolkit

## Usage
```php
<?php
use YourNamespace\ArrayToolkit;

$array = ['name' => 'John', 'age' => 30, 'city' => 'New York'];

// Pluck specific keys
$result = ArrayToolkit::pluck($array, ['name', 'age']);
// Result: ['name' => 'John', 'age' => 30]

// Remove specific keys
$result = ArrayToolkit::except($array, ['age']);
// Result: ['name' => 'John', 'city' => 'New York']

// Flatten a multi-dimensional array
$nestedArray = [1, [2, 3], [4, [5, 6]]];
$result = ArrayToolkit::flatten($nestedArray);
// Result: [1, 2, 3, 4, 5, 6]

// Group an array of arrays by a specific key
$users = [
    ['name' => 'John', 'role' => 'admin'],
    ['name' => 'Jane', 'role' => 'user'],
    ['name' => 'Bob', 'role' => 'admin']
];
$result = ArrayToolkit::groupBy($users, 'role');
// Result: [
//     'admin' => [
//         ['name' => 'John', 'role' => 'admin'],
//         ['name' => 'Bob', 'role' => 'admin']
//     ],
//     'user' => [
//         ['name' => 'Jane', 'role' => 'user']
//     ]
// ]