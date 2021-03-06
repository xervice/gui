<?php

namespace App\Twig;

use Xervice\Atomic\Communication\Twig\AtomicTwigExtension;
use Xervice\Twig\TwigDependencyProvider as XerviceTwigDependencyProvider;

class TwigDependencyProvider extends XerviceTwigDependencyProvider
{
    /**
     * @return array
     */
    protected function getTwigExtensions(): array
    {
        return [
            new AtomicTwigExtension()
        ];
    }

}