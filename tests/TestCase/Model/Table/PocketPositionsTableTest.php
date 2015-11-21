<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PocketPositionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PocketPositionsTable Test Case
 */
class PocketPositionsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pocket_positions',
        'app.jpa9_pot_balls',
        'app.jpa9_shoot_logs',
        'app.jpa9_players',
        'app.users',
        'app.jpa9_games'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PocketPositions') ? [] : ['className' => 'App\Model\Table\PocketPositionsTable'];
        $this->PocketPositions = TableRegistry::get('PocketPositions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PocketPositions);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
