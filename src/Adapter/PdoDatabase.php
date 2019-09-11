<?php


namespace depa\FormularHandlerMiddleware\Adapter;


use depa\FormularHandlerMiddleware\AbstractAdapter;
use Psr\Http\Message\ResponseInterface;

/**
 * Die Klasse speichert die Formulardaten in einer Datenbank.
 *
 * Class PdoDatabase
 * @package depa\FormularHandlerMiddleware\Adapter
 */
class PdoDatabase extends AbstractAdapter
{

    /**
     * Überprüft das übergebene Config-Array.
     *
     * @param $config
     * @return mixed|void
     */
    protected function checkConfig($config)
    {
        // TODO: Implement checkConfig() method.
    }

    /**
     *  Speichert die Daten in einer Datenbank
     */
    public function handleData()
    {
        // TODO: Implement handleData() method.
    }
}