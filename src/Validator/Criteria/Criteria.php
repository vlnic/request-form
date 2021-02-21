<?php declare(strict_types=1);

namespace Vlnic\RequestForm\Validator\Criteria;

/**
 * Interface Criteria
 * @package Vlnic\RequestForm\Validator\Criteria
 */
interface Criteria
{
    /**
     * @return string
     */
    public static function name() : string;

    /**
     * @param $value
     * @param array|null $params
     * @param array $data
     * @return bool
     */
    public function check($value, array $params, array $data) : bool;
}
