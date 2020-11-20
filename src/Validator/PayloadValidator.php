<?php declare(strict_types=1);

namespace Vlnic\RequestForm\Validator;

use Vlnic\RequestForm\RequestForm;

/**
 * Class RequestFormValidator
 * @package Vlnic\RequestForm\Validator
 */
final class PayloadValidator
{
    /**
     * @var array
     */
    private array $errors = [];

    /**
     * @param array $data
     * @param RequestForm $requestForm
     */
    public function validate(array $data, RequestForm $requestForm)
    {
        foreach ($requestForm->rules() as $k => $v) {
            if (! in_array($k, array_keys($data), true)) {
                continue;
            }

        }
    }

    /**
     * @return bool
     */
    public function fails()
    {
        return count($this->errors) > 0;
    }

    /**
     * @return array
     */
    public function errors()
    {
        return $this->errors;
    }
}
