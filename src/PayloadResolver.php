<?php

namespace Vlnic\RequestForm;

use Symfony\Component\HttpFoundation\Request;

/**
 * Class PayloadResolver
 * @package Vlnic\RequestForm
 */
class PayloadResolver
{
    /**
     * @param Request $request
     * @return array
     */
    public function resolve(Request  $request)
    {
        if (in_array($request->getMethod(), ['GET', 'HEAD', 'DELETE'], true)) {
            return $request->query->all();
        }

        return array_merge(
            $request->request->all(),
            $request->files->all()
        );
    }
}