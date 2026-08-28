<?php
/**
 * Tests for NimbusForge
 */

use PHPUnit\Framework\TestCase;
use Nimbusforge\Nimbusforge;

class NimbusforgeTest extends TestCase {
    private Nimbusforge $instance;

    protected function setUp(): void {
        $this->instance = new Nimbusforge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nimbusforge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
