<?php

namespace Vlnic\RequestForm;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\ConstraintViolationListInterface;

/**
 * Class RequestFormBinder
 * @package Vlnic\RequestForm
 */
class RequestFormBinder
{
    /**
     * @var PayloadResolver
     */
    protected $resolver;

    /**
     * RequestFormBinder constructor.
     * @param PayloadResolver $resolver
     */
    public function __construct(PayloadResolver $resolver)
    {
        $this->resolver = $resolver;
    }

    public function bind(Request $request, callable $action) : ?Response
    {
        return null;
    }

    public function matchArguments(callable $action)
    {
        if (is_array($action)) {
            $classReflection = new \ReflectionClass($action[0]);
            $actionReflection = $classReflection->getMethod($action[1]);
        } elseif ($action instanceof \Closure || is_string($action)) {
            $actionReflection = new \ReflectionFunction($action);
        } else {
            $classReflection = new \ReflectionClass($action);
            $actionReflection = $classReflection->getMethod('__invoke');
        }

        $matchedArguments = [];
        $arguments = $actionReflection->getParameters();
        foreach ($arguments as $argument) {
            if ($this->isArgumentIsSubtypeOf($argument, RequestForm::class)) {
                $matchedArguments['requestForm'] = $argument;
            }
            if ($this->isArgumentIsSubtypeOf($argument, ConstraintViolationListInterface::class)) {
                $matchedArguments['errors'] = $argument;
            }
        }
        return $matchedArguments;
    }

    protected function resolvePayload(RequestForm $requestForm, Request  $request)
    {

    }

    /**
     * @param \ReflectionParameter $argument
     * @param $subtype
     * @return bool
     */
    protected function isArgumentIsSubtypeOf(\ReflectionParameter $argument, $subtype)
    {
        if (! ($className = $argument->getClass())) {
            return false;
        }
        return is_a($className->name, $subtype, true);
    }
}