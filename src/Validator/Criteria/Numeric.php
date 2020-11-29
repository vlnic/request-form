<?php declare(strict_types=1);

namespace Vlnic\RequestForm\Validator\Criteria;

/**
 * Class Numeric
 * @package Vlnic\RequestForm\Validator\Criteria
 */
class Numeric implements Criteria
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'numeric';
    }

    /**
     * @param $value
     * @param array|null $params
     * @return bool
     */
    public function check($value, array $params = null): bool
    {
        return is_numeric($value);
    }
}