<?php

namespace Indigoram89\Currency;

class USD extends Currency implements CurrencyInterface
{
    /**
     * Get a currency names (translated).
     * Example: ['en' => 'Enghlish name', 'ru' => 'Русское название']
     *
     * @return array
     */
    public function getName() : array
    {
        return [
            'en' => 'US dollar',
            'ru' => 'Доллар США',
        ];
    }

    /**
     * Get a currency iso code.
     *
     * @return int
     */
    public function getIso() : int
    {
        return 840;
    }
}
