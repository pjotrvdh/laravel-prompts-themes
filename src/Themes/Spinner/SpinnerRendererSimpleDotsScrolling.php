<?php

namespace Pjotrvdh\LaravelPromptsThemes\Themes\Spinner;

use Laravel\Prompts\Themes\Default\SpinnerRenderer;

class SpinnerRendererSimpleDotsScrolling extends SpinnerRenderer
{
    protected array $frames = [
        '.  ',
        '.. ',
        '...',
        ' ..',
        '  .',
        '   ',
    ];
    protected string $staticFrame = ' ..';
    protected int $interval = 200;
}
