<?php
/**
 * Tests for NftShelf
 */

use PHPUnit\Framework\TestCase;
use Nftshelf\Nftshelf;

class NftshelfTest extends TestCase {
    private Nftshelf $instance;

    protected function setUp(): void {
        $this->instance = new Nftshelf(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nftshelf::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
