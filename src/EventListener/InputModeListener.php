<?php

declare(strict_types=1);

namespace Dvc\ContaoFormFieldExtensionsBundle\EventListener;

use Contao\CoreBundle\DependencyInjection\Attribute\AsHook;
use Contao\Form;
use Contao\FormCaptcha;
use Contao\FormPassword;
use Contao\FormText;
use Contao\FormTextarea;
use Contao\Widget;

class InputModeListener
{
    private const ALLOWED_INPUT_MODES = [
        'text',
        'decimal',
        'numeric',
        'tel',
        'search',
        'email',
        'url',
    ];

    #[AsHook('loadFormField')]
    public function __invoke(Widget $widget, string $formId, array $formData, Form $form): Widget
    {
        if (!$this->supportsInputMode($widget)) {
            return $widget;
        }

        $inputMode = (string) ($widget->htmlInputmode ?? '');

        if ('' === $inputMode || !\in_array($inputMode, self::ALLOWED_INPUT_MODES, true)) {
            return $widget;
        }

        $widget->addAttribute('inputmode', $inputMode);

        return $widget;
    }

    private function supportsInputMode(Widget $widget): bool
    {
        return $widget instanceof FormText
            || $widget instanceof FormPassword
            || $widget instanceof FormTextarea
            || $widget instanceof FormCaptcha;
    }
}
