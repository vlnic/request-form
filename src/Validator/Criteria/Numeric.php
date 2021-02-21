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
    public static function name(): string
    {
        return 'numeric';
    }

    /**
     * @param $value
     * @param array|null $params
     * @param array $data
     * @return bool
     */
    public function check($value, array $params, array $data): bool
    {
        return is_numeric($value);
    }
}