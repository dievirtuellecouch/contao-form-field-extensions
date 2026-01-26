<?php

declare(strict_types=1);

namespace Dvc\ContaoFormFieldExtensionsBundle;

use Dvc\ContaoFormFieldExtensionsBundle\DependencyInjection\DvcContaoFormFieldExtensionsExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class DvcContaoFormFieldExtensionsBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }

    public function getContainerExtension(): ?ExtensionInterface
    {
        return new DvcContaoFormFieldExtensionsExtension();
    }
}
