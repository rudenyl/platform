<?php

namespace Orchid\Platform\Widget;

interface WidgetContractInterface
{
    /**
     * @param $key
     *
     * @return mixed
     */
    public function get(string $key);

    /**
     * @param mixed
     *
     * @return mixed
     */
    public function handler();
}
