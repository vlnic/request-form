<?php declare(strict_types=1);

namespace Vlnic\RequestForm\Validator\Criteria;


class Required implements Criteria
{

    public static function name(): string
    {
        return 'required';
    }

    public function check($value, array $params, array $data): bool
    {
        return true;
    }
}