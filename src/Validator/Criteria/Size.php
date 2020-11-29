<?php declare(strict_types=1);

namespace Vlnic\RequestForm\Validator\Criteria;

/**
 * Class Size
 * @package Vlnic\RequestForm\Validator\Criteria
 */
class Size implements Criteria
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'size';
    }

    /**
     * @param $value
     * @param array|null $params
     * @return bool
     */
    public function check($value, array $params = null): bool
    {
        $size = is_null($params) || count($params) === 0 ? 0 : (int) $params[0];
        return is_array($value)
            ? $size === count($value)
            : $size === strlen($value);
    }
}
