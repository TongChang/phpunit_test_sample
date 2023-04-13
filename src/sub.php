<?php

namespace App;

class sub
{
    public function __construct()
    {
    }

    /**
     * なにもしないで、ただ返すだけ
     *
     * @param array $arg
     * @return array
     */
    public function doSomething(array $arg): array
    {
        return ["data" => $arg];
    }
}
