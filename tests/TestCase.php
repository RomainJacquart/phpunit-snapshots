<?php

namespace Madewithlove\PhpunitSnapshots;

use PHPUnit\Framework\TestCase as PHPUnitFrameworkTestCase;

abstract class TestCase extends PHPUnitFrameworkTestCase
{
    use SnapshotAssertions;
}
