# LaravelBackpackSectionTitle

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![The Whole Fruit Manifesto](https://img.shields.io/badge/writing%20standard-the%20whole%20fruit-brightgreen)](https://github.com/the-whole-fruit/manifesto)

This package provides a new `section-title` Backpack field type for use in your create/edit forms that lets you easily add a nicely styled header and/or information text to your Backpack forms.

This package was created using the [Laravel Backpack Addon Skeleton](https://github.com/Laravel-Backpack/addon-skeleton) provided by the Backpack team.

## Screenshots

![image](https://user-images.githubusercontent.com/5711101/163187339-b54f12f0-efc1-4769-b967-a7851d59673c.png)
Code used to generate the screenshot: [example-for-screenshot.php](https://github.com/stats4sd/laravel-backpack-section-title/blob/main/example-for-screenshot.php)

## Installation

Via Composer

``` bash
composer require stats4sd/laravel-backpack-section-title
```

## Usage

```php
$this->crud->addField([
    'name' => 'field_name',
    'type' => 'section-title',
    'title' => 'Your Heading',
    'content' => 'Some information about how to complete the form, to be displayed inside a callout box',
    'variant' => 'info',
    'divider' => true,
    'view_namespace' => 'stats4sd.laravel-backpack-section-title::fields',
]);
```

Notice the ```view_namespace``` attribute - make sure that is exactly as above, to tell Backpack to load the field from this _addon package_, instead of assuming it's inside the _Backpack\CRUD package_.

Optional properties:
 - `title` (string) - text to be displayed inside an `<h4>` tag.
 - `content` (string) - text to be displayed inside a padded callout box.
 - `variant` (string) - You can use any of the Bootstrap 4 keywords to change the colour of the left border. (e.g. primary, secondary, success, info, warning, danger, light, dark). It defaults to 'info' if left null.
 - `divider` (boolean) - If set to TRUE, this adds an `<hr>` tag above the header, in case you want an even clearer visual divide between content sections.


## Overwriting

If you need to change the field in any way, you can easily publish the file to your app, and modify that file any way you want. But please keep in mind that you will not be getting any updates.

**Step 1.** Copy-paste the blade file to your directory:
```bash
# create the fields directory if it's not already there
mkdir -p resources/views/vendor/backpack/crud/fields

# copy the blade file inside the folder we created above
cp -i vendor/stats4sd/laravel-backpack-section-title/src/resources/views/fields/section-title.blade.php resources/views/vendor/backpack/crud/fields/section-title.blade.php
```

**Step 2.** Remove the vendor namespace wherever you've used the field:
```diff
$this->crud->addField([
    'name' => 'agreed',
    'type' => 'toggle',
    'label' => 'I agree to the terms and conditions',
-   'view_namespace' => 'stats4sd.laravel-backpack-section-title::fields'
]);
```

**Step 3.** Uninstall this package. Since it only provides one file, and you're no longer using that file, it makes no sense to have the package installed:
```bash
composer remove stats4sd/laravel-backpack-section-title
```

## Change log

Changes are documented here on Github. Please see the [Releases tab](https://github.com/stats4sd/laravel-backpack-section-title/releases).

## Contributing

Please see [contributing.md](contributing.md) for a todolist and howtos.

## Security

If you discover any security related issues, please email d.e.mills@stats4sd.org instead of using the issue tracker.

## Credits

- [Dave Mills][link-author]
- [All Contributors][link-contributors]

## License

This project was released under MIT, so you can install it on top of any Backpack & Laravel project. Please see the [license file](license.md) for more information.

However, please note that you do need Backpack installed, so you need to also abide by its [YUMMY License](https://github.com/Laravel-Backpack/CRUD/blob/master/LICENSE.md). That means in production you'll need a Backpack license code. You can get a free one for non-commercial use (or a paid one for commercial use) on [backpackforlaravel.com](https://backpackforlaravel.com).


[ico-version]: https://img.shields.io/packagist/v/stats4sd/laravel-backpack-section-title.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/stats4sd/laravel-backpack-section-title.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/stats4sd/laravel-backpack-section-title
[link-downloads]: https://packagist.org/packages/stats4sd/laravel-backpack-section-title
[link-author]: https://github.com/stats4sd
[link-contributors]: ../../contributors
