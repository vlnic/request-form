<?php declare(strict_types=1);

namespace Vlnic\RequestForm\Validator\Criteria;

/**
 * Class Min
 * @package Vlnic\RequestForm\Validator\Criteria
 */
class Min implements Criteria
{
    /**
     * @return string
     */
    public static function name(): string
    {
        return 'min';
    }

    /**
     * @param $value
     * @param array|null $params
     * @return bool
     */
    public function check($value, array $params = null): bool
    {
        $min = is_null($params) || count($params) === 0 ? 0 : (int) array_shift($params);
        return is_numeric($value)
            ? (int) $value >= $min
            : strlen($value) >= $min;
    }
}
