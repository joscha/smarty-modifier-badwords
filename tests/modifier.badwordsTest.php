<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class BadwordsTest extends TestCase
{
    public function testReplace(): void
    {
        $this->assertEquals(
            'Hello *** and not ****',
            smarty_modifier_badwords('Hello bad and not good')
        );
    }
}