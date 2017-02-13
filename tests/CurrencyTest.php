<?php

namespace Indigoram89\Currency\Test;

use Indigoram89\Currency\RUB;
use Indigoram89\Currency\USD;
use Indigoram89\Currency\Currency;

class CurrencyTest extends TestCase
{
    /** @test */
    public function get_currencies()
    {
        $currencies = Currency::get();

        $this->assertCount(0, $currencies);

        (new RUB)->fetch();
        (new USD)->fetch();
        (new RUB)->fetch();
        (new USD)->fetch();

        $currencies = Currency::get();

        $this->assertCount(2, $currencies);
    }

    /** @test */
    public function instance_of()
    {
        (new RUB)->fetch();
        (new USD)->fetch();

        $currencies = Currency::get();

        $this->assertInstanceOf(RUB::class, $currencies->first());
        $this->assertInstanceOf(USD::class, $currencies->last());
    }

    /** @test */
    public function attributes()
    {
        $currency = (new RUB)->fetch();

        $this->assertEquals('RUB', $currency->code);
        $this->assertEquals(643, $currency->iso);
    }

    /** @test */
    public function relations()
    {
        $currency = (new RUB)->fetch();

        $model = TestModel::create([
            'name' => 'Test model', 'currency_id' => $currency->id,
        ]);

        $this->assertInstanceOf(RUB::class, $currency);
    }
}
