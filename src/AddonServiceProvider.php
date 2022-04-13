<?php

namespace Stats4sd\LaravelBackpackSectionTitle;

use Illuminate\Support\ServiceProvider;

class AddonServiceProvider extends ServiceProvider
{
    use AutomaticServiceProvider;

    protected $vendorName = 'stats4sd';
    protected $packageName = 'laravel-backpack-section-title';
    protected $commands = [];
}
