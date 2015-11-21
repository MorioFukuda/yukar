<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Jpa9SkillLevelsAndBallCountsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Jpa9SkillLevelsAndBallCountsTable Test Case
 */
class Jpa9SkillLevelsAndBallCountsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.jpa9_skill_levels_and_ball_counts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Jpa9SkillLevelsAndBallCounts') ? [] : ['className' => 'App\Model\Table\Jpa9SkillLevelsAndBallCountsTable'];
        $this->Jpa9SkillLevelsAndBallCounts = TableRegistry::get('Jpa9SkillLevelsAndBallCounts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Jpa9SkillLevelsAndBallCounts);

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
