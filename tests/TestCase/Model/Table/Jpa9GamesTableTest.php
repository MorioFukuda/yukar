<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Jpa9GamesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Jpa9GamesTable Test Case
 */
class Jpa9GamesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.jpa9_games',
        'app.jpa9_players',
        'app.users',
        'app.jpa9_pot_balls',
        'app.jpa9_shoot_logs',
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
        $config = TableRegistry::exists('Jpa9Games') ? [] : ['className' => 'App\Model\Table\Jpa9GamesTable'];
        $this->Jpa9Games = TableRegistry::get('Jpa9Games', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Jpa9Games);

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
