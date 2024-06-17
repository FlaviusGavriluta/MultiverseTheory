# Multiverse Theory

## Story

There are a number of issues in physics that could be solved if there were an infinite number of other universes.
For example, particles can appear to be in two places at once. The study of these areas of nature led us to things like string theory.
Is it possible that our Universe is not the only one? If so, how can we find something in this vast Multiverse?

Your task is to implement a search function based on PHP's `in_array()` for multi-dimensional arrays.

## What are you going to learn?

- what `multi-dimensional arrays` are
- when not to use PHP's `in_array()` function
- implement a `search function` for multi-dimensional arrays

## Tasks

1. Install the dependencies specified in `composer.json` by executing the `composer install` terminal command.
    - The `vendor` folder exists and contains at least a `phpunit` folder and an `autoload.php` file. Note that other directories can be inside `vendor` as well.

2. Create your own class with namespace `Physics` and name `StringTheory`.
    - `StringTheory` class exists in `src/StringTheory.php` with namespace `Physics`.

3. Implement the `inMultiverse(mixed entity, array multiverse, bool strict) : bool` method to check if the given entity is in the multiverse.
    - New `inMultiverse(mixed entity, array multiverse, bool strict) : bool` method exists in `StringTheory` class. In Strict mode, if we search for "1" in [1, 2, 3] (for example), it won't find it. In non-strict mode, it will.
    - The method returns `true`, if found the entity, `false` otherwise.
    - The method can be used with strict mode on or off.
When it's on, it will check equality based on not just value but type as well.
    - If the `strict` parameter is not provided, it uses non-strict mode as default.

## General requirements

None

## Hints

- Composer creates a folder for each dependency listed in `composer.json` file's `require` and `require-dev` parts. Every dependency can have dependencies, too. This is why you may find way more dependencies installed in your `vendor` folder compared to your `composer.json`.
- You can test your solution any time with the provided scripts. Just run the one corresponds to your operating system (`test.bat` file on Windows, `test.sh` on Linux / macOS).
- `Recursion` can be your friend on this one.

## Background materials

- <i class="far fa-exclamation"></i> [A guide about Composer](project/curriculum/materials/pages/php/composer-package-manager.md)
- <i class="far fa-book-open"></i> [Multi-dimensional Arrays](https://www.w3schools.com/php/php_arrays_multidimensional.asp)
