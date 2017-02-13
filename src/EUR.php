<?php

namespace Indigoram89\Currency;

class EUR extends Currency implements CurrencyInterface
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
            'en' => 'Euro',
            'ru' => 'Евро',
        ];
    }

    /**
     * Get a currency iso code.
     *
     * @return int
     */
    public function getIso() : int
    {
        return 978;
    }
}
