<?php

namespace ElectricBrands\FormularHandlerMiddleware\Adapter;

use ElectricBrands\FormularHandlerMiddleware\AbstractAdapter;
use Psr\Http\Message\ResponseInterface;

/**
 * Class Wufoo.
 */
class Wufoo extends AbstractAdapter
{
    /**
     * @param $config
     */
    protected function checkConfig($config)
    {
        // TODO: Implement checkConfig() method.
    }

    /**
     * @return ResponseInterface
     */
    public function handleData() : ResponseInterface
    {
        // TODO: Implement handleData() method.
        return null;
    }
}
