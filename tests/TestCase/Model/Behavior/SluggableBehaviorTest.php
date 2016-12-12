<?php
namespace Cakeutility\Test\TestCase\Model\Behavior;

use Cake\TestSuite\TestCase;
use Cakeutility\Model\Behavior\SluggableBehavior;

/**
 * Cakeutility\Model\Behavior\SluggableBehavior Test Case
 */
class SluggableBehaviorTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Cakeutility\Model\Behavior\SluggableBehavior
     */
    public $Sluggable;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Sluggable = new SluggableBehavior();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sluggable);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
