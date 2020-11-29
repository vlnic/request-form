<?php declare(strict_types=1);

namespace Vlnic\RequestForm\Validator\Criteria;

/**
 * Class Strings
 * @package Vlnic\RequestForm\Validator\Criteria
 */
class StringCriteria implements Criteria
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'string';
    }

    /**
     * @param $value
     * @param array|null $params
     * @return bool
     */
    public function check($value, array $params = null): bool
    {
        return is_string($value);
    }
}