<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Jpa9LoserSkillLevelsAndLoserPointsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Jpa9LoserSkillLevelsAndLoserPointsTable Test Case
 */
class Jpa9LoserSkillLevelsAndLoserPointsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.jpa9_loser_skill_levels_and_loser_points'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Jpa9LoserSkillLevelsAndLoserPoints') ? [] : ['className' => 'App\Model\Table\Jpa9LoserSkillLevelsAndLoserPointsTable'];
        $this->Jpa9LoserSkillLevelsAndLoserPoints = TableRegistry::get('Jpa9LoserSkillLevelsAndLoserPoints', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Jpa9LoserSkillLevelsAndLoserPoints);

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
