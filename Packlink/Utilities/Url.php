<?php

namespace Packlink\Utilities;

class Url
{
    /**
     * Retrieves Front controller url.
     *
     * @param $controller
     * @param $action
     * @param array $params
     *
     * @return string
     */
    public static function getFrontUrl($controller, $action, array $params = [])
    {
        $params = array_merge([
            'module' => 'frontend',
            'controller' => $controller,
            'action' => $action,
        ],
        $params);

        $url = Shopware()->Front()->Router()->assemble($params);

        return str_replace('http:', 'https:', $url);
    }
}