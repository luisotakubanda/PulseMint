<?php
/**
 * Tests for PulseMint
 */

use PHPUnit\Framework\TestCase;
use Pulsemint\Pulsemint;

class PulsemintTest extends TestCase {
    private Pulsemint $instance;

    protected function setUp(): void {
        $this->instance = new Pulsemint(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Pulsemint::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
