<?php

namespace Pjotrvdh\LaravelPromptsThemes\Themes\Spinner;

use Laravel\Prompts\Themes\Default\SpinnerRenderer;

class SpinnerRendererMoon extends SpinnerRenderer
{
    protected array $frames = [
        '🌑 ',
        '🌒 ',
        '🌓 ',
        '🌔 ',
        '🌕 ',
        '🌖 ',
        '🌗 ',
        '🌘 ',
    ];
    protected string $staticFrame = '🌕 ';
    protected int $interval = 80;
}
