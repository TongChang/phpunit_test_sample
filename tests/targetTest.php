<?php

use PHPUnit\Framework\TestCase;
use App\sub;
use App\target;

/**
 * ほげてすと
 */
class targetTest extends TestCase
{
    /**
     * ほげ1
     *
     * @return void
     * @covers App\target::doExec
     * @covers App\target::__construct
     * @covers App\sub::__construct
     */
    public function testHoge()
    {
        $subMock = $this->getMockBuilder(sub::class)
            ->onlyMethods(['doSomething'])
            ->getMock();
        $subMock->expects($this->never())
            ->method('doSomething');
        $target = new target($subMock);
        $this->assertSame([], $target->doExec([]));
    }

    /**
     * ほげ2
     *
     * @return void
     * @covers App\target::doExec
     * @covers App\target::__construct
     * @covers App\sub::__construct
     */
    public function testHoge2()
    {
        $subMock = $this->getMockBuilder(sub::class)
            ->onlyMethods(['doSomething'])
            ->getMock();
        $subMock->expects($this->once())
            ->method('doSomething')
            ->willReturn(
                ["data" => range(0, 9)]
            );
        $target = new target($subMock);
        $this->assertSame(range(0, 9), $target->doExec(range(0, 9)));
    }

    /**
     * ほげ3
     *
     * @return void
     * @covers App\target::doExec
     * @covers App\target::__construct
     * @covers App\sub::__construct
     */
    public function testHoge3()
    {
        $subMock = $this->getMockBuilder(sub::class)
            ->onlyMethods(['doSomething'])
            ->getMock();
        $subMock->expects($this->exactly(2))
            ->method('doSomething')
            ->willReturn(
                ["data" => range(0, 9)],
                ["data" => range(10, 19)]
            );
        $target = new target($subMock);
        $this->assertSame(range(0, 19), $target->doExec(range(0, 19)));
    }
}
