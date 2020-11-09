<?php

namespace Vlnic\RequestForm\Validator;

/**
 * Interface ValidatorInterface
 * @package Vlnic\RequestForm\Validator
 */
interface ValidatorInterface
{
    /**
     * Get the attributes and values that were validated.
     *
     * @return array
     */
    public function validate();

    /**
     * Determine if the data fails the validation rules.
     *
     * @return bool
     */
    public function fails();

    /**
     * Get the failed validation rules.
     *
     * @return array
     */
    public function failed();
}
