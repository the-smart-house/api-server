<?php

namespace App\Helpers;

use Closure;

class UniquePerIdGenerator
{
    private Closure $generatorFunction;

    /**
     * @var array<int, array>
     */
    private $idsToGeneratedValues;

    public function __construct(callable $generatorFunction)
    {
        $this->generatorFunction = Closure::fromCallable($generatorFunction);
        $this->idsToGeneratedValues = [];
    }

    public function generateForId(int $id)
    {
        $generatedValues = $this->idsToGeneratedValues[$id] ?? [];
        $value = null;

        while (true) {
            $value = ($this->generatorFunction)();

            if (!in_array($value, $generatedValues)) {
                array_push($generatedValues, $value);
                $this->idsToGeneratedValues[$id] = $generatedValues;
                break;
            }
        }

        return $value;
    }
}
