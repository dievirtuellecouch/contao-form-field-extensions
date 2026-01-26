<?php

declare(strict_types=1);

namespace Dvc\ContaoFormFieldExtensionsBundle\ContaoManager;

use Dvc\ContaoFormFieldExtensionsBundle\DvcContaoFormFieldExtensionsBundle;
use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(DvcContaoFormFieldExtensionsBundle::class)
                ->setLoadAfter([
                    ContaoCoreBundle::class,
                ])
        ];
    }
}
