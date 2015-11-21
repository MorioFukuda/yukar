<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Jpa9ShootLogsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Jpa9ShootLogsTable Test Case
 */
class Jpa9ShootLogsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.jpa9_shoot_logs',
        'app.jpa9_players',
        'app.users',
        'app.jpa9_games',
        'app.jpa9_pot_balls',
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
        $config = TableRegistry::exists('Jpa9ShootLogs') ? [] : ['className' => 'App\Model\Table\Jpa9ShootLogsTable'];
        $this->Jpa9ShootLogs = TableRegistry::get('Jpa9ShootLogs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Jpa9ShootLogs);

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
