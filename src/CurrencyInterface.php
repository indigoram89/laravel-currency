<?php

namespace Indigoram89\Currency;

interface CurrencyInterface
{
    /**
     * Get a currency names (translated).
     * Example: ['en' => 'Enghlish name', 'ru' => 'Русское название']
     *
     * @return array
     */
    public function getName() : array;

    /**
     * Get a currency iso code.
     *
     * @return int
     */
    public function getIso() : int;
}
