<?php

namespace Vlnic\RequestForm;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class RequestForm
 * @package Vlnic\RequestForm
 */
class RequestForm extends Request
{
    /**
     * @var array
     */
    protected $errors;

    /**
     * @return array
     */
    public function rules() : array
    {
        return [];
    }

    /**
     * @return Response
     */
    public function handleError() : Response
    {
        return new Response();
    }
}