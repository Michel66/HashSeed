<?php
/**
 * Tests for HashSeed
 */

use PHPUnit\Framework\TestCase;
use Hashseed\Hashseed;

class HashseedTest extends TestCase {
    private Hashseed $instance;

    protected function setUp(): void {
        $this->instance = new Hashseed(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Hashseed::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
