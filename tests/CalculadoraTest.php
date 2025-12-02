<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Calculadora\Calculadora;

class CalculadoraTest extends TestCase
{
    private Calculadora $calc;

    protected function setUp(): void
    {
        $this->calc = new Calculadora();
    }

    public function testSomar()
    {
        $this->assertEquals(8, $this->calc->somar(5, 3));
        $this->assertEquals(0, $this->calc->somar(0, 0));
        $this->assertEquals(-2, $this->calc->somar(-5, 3));
    }

    public function testSubtrair()
    {
        $this->assertEquals(2, $this->calc->subtrair(5, 3));
        $this->assertEquals(-3, $this->calc->subtrair(0, 3));
        $this->assertEquals(-8, $this->calc->subtrair(-5, 3));
    }

    public function testMultiplicar()
    {
        $this->assertEquals(15, $this->calc->multiplicar(5, 3));
        $this->assertEquals(0, $this->calc->multiplicar(0, 999));
        $this->assertEquals(-15, $this->calc->multiplicar(-5, 3));
    }

    public function testDividir()
    {
        $this->assertEquals(2, $this->calc->dividir(10, 5));
        $this->assertEquals(-2, $this->calc->dividir(-10, 5));
        $this->assertEquals(2.5, $this->calc->dividir(5, 2));
    }

    public function testDividirPorZeroGeraExcecao()
    {
        $this->expectException(\DivisionByZeroError::class);
        $this->calc->dividir(10, 0);
    }
}
