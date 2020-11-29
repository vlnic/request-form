<?php declare(strict_types=1);

namespace Vlnic\RequestForm\Validator\Criteria;

/**
 * Class Email
 * @package Vlnic\RequestForm\Validator\Criteria
 */
class Email implements Criteria
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'email';
    }

    /**
     * @param $value
     * @param array|null $params
     * @return bool
     */
    public function check($value, array $params = null): bool
    {
        return is_string($value)
            && false !== preg_match('/^([\w\d]+)@([\w\d]+)\.[a-z]+$/is', $value);
    }
}