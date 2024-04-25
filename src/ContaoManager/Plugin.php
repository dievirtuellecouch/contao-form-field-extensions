<?php

namespace DVC\FormFieldExtensions\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use DVC\FormFieldExtensions\FormFieldExtensionsBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(FormFieldExtensionsBundle::class)
                ->setLoadAfter([
                    ContaoCoreBundle::class,
                ])
        ];
    }
}
