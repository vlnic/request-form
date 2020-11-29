<?php declare(strict_types=1);

namespace Vlnic\RequestForm\Validator;

use Vlnic\RequestForm\RequestForm;
use Vlnic\RequestForm\Validator\Criteria\Criteria;

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
     * @var array
     */
    private array $criteria;

    /**
     * PayloadValidator constructor.
     * @param array $criteria
     */
    public function __construct(array $criteria)
    {
        $this->criteria = $this->buildCriteriaMap($criteria);
    }

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
     * @param array $criteria
     * @return array
     */
    private function buildCriteriaMap(array $criteria)
    {
        $map = [];
        /** @var Criteria $criterion */
        foreach ($criteria as $criterion) {
            $map[$criterion->name()] = $criterion;
        }
        return $map;
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
