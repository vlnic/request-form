<?php declare(strict_types=1);

namespace Vlnic\RequestForm\Validator\Criteria;

/**
 * Class Max
 * @package Vlnic\RequestForm\Validator\Criteria
 */
class Max implements Criteria
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'max';
    }

    /**
     * @param $value
     * @param array|null $params
     * @return bool
     */
    public function check($value, array $params = null): bool
    {
        $max = count($params) === 0 ? 0 : (int) $params[0];
        return is_numeric($value)
            ? $max >= (int) $value
            : $max >= strlen($value);
    }
}