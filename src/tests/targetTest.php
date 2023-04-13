<?php

use PHPUnit\Framework\TestCase;
use App\sub;
use App\target;

class targetTest extends TestCase
{
    public function testHoge()
    {
        $subMock = $this->getMockBuilder(sub::class)
            ->onlyMethods(['doSomething'])
            ->getMock();
        $subMock->expects($this->once())
            ->method('doSomething')
            ->willReturn([1, 2, 3]);
        $target = new target($subMock);
        $this->assertSame([1, 2, 3], $target->doExec([0, 1, 2, 3]));
    }

    public function testHoge2()
    {
        $subMock = $this->getMockBuilder(sub::class)
            ->onlyMethods(['doSomething'])
            ->getMock();
        $subMock->expects($this->once())
            ->method('doSomething')
            ->willReturn(range(0, 9));
        $target = new target($subMock);
        $this->assertSame(range(0, 9), $target->doExec(range(0, 9)));
    }

    public function testHoge3()
    {
        $subMock = $this->getMockBuilder(sub::class)
            ->onlyMethods(['doSomething'])
            ->getMock();
        $subMock->expects($this->exactly(2))
            ->method('doSomething')
            ->willReturn(range(0, 9), range(10, 19));
        $target = new target($subMock);
        $this->assertSame(range(0, 19), $target->doExec(range(0, 19)));
    }
}
