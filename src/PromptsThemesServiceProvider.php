<?php

namespace Pjotrvdh\LaravelPromptsThemes;

use Laravel\Prompts\Prompt;
use Laravel\Prompts\Spinner;
use Pjotrvdh\LaravelPromptsThemes\Themes\Spinner\SpinnerRendererDefault;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PromptsThemesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package) : void
    {
        $package
            ->name('prompts-themes')
            ->hasConfigFile();
    }

    public function packageRegistered(): void
    {
        if (config('prompts-themes.spinner') !== SpinnerRendererDefault::class) {
            Prompt::addTheme('custom', [
                Spinner::class => config('prompts-themes.spinner'),
            ]);
            Prompt::theme('custom');
        }
    }
}
