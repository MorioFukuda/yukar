<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Jpa9PotBallsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Jpa9PotBallsTable Test Case
 */
class Jpa9PotBallsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.jpa9_pot_balls',
        'app.jpa9_shoot_logs',
        'app.jpa9_players',
        'app.users',
        'app.jpa9_games',
        'app.pocket_positions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Jpa9PotBalls') ? [] : ['className' => 'App\Model\Table\Jpa9PotBallsTable'];
        $this->Jpa9PotBalls = TableRegistry::get('Jpa9PotBalls', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Jpa9PotBalls);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
