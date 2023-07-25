<?php declare(strict_types = 1);

/**
 * @template TDerivative of Derivative
 */
interface Original
{
}

interface Derivative
{
}

interface DerivativeRetriever
{

    /**
     * @template T of Derivative
     * @param Original<T> $original
     * @return T
     */
    public function getDerivative(Original $original): Derivative;
}

/**
 * @implements Original<MyDerivative>
 */
class MyOriginal implements Original
{
}

class MyDerivative implements Derivative
{
}

class MyDerivativeRetriever implements DerivativeRetriever
{
    public function getDerivative(Original $original): Derivative
    {
        return new MyDerivative;
    }
}

class Foo
{
    private DerivativeRetriever $derivativeRetriever;

    public function __construct(DerivativeRetriever $derivativeRetriever)
    {
        $this->derivativeRetriever = $derivativeRetriever;
    }

    public function someFunction(): MyDerivative
    {
        return $this->derivativeRetriever->getDerivative(new MyOriginal());
    }
}

$foo = new Foo(new MyDerivativeRetriever);
$result = $foo->someFunction();
