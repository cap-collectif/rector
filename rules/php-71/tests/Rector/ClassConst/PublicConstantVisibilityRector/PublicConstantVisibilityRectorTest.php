<?php

declare(strict_types=1);

namespace Rector\Php71\Tests\Rector\ClassConst\PublicConstantVisibilityRector;

use Iterator;
use Rector\Core\Testing\PHPUnit\AbstractRectorTestCase;
use Rector\Php71\Rector\ClassConst\PublicConstantVisibilityRector;

final class PublicConstantVisibilityRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(string $file): void
    {
        $this->doTestFile($file);
    }

    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    protected function getRectorClass(): string
    {
        return PublicConstantVisibilityRector::class;
    }
}
