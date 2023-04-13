<?php

namespace App;

class target
{
    private sub $sub;
    public function __construct(sub $sub)
    {
        $this->sub = $sub;
    }

    /**
     * 10 こづつに分割して、くっつけて、へんきゃくする
     *
     * @param array $arg
     * @return void
     */
    public function doExec(array $arg)
    {
        $argChunk = array_chunk($arg, 10);
        $ret = [];
        for ($chunkIdx = 0; $chunkIdx < count($argChunk); $chunkIdx++) {
            $ret = array_merge($ret, $this->sub->doSomething($argChunk[$chunkIdx])["data"] ?? []);
        }
        return $ret;
    }
}
