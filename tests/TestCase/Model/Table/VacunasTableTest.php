<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VacunasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VacunasTable Test Case
 */
class VacunasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VacunasTable
     */
    public $Vacunas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.vacunas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Vacunas') ? [] : ['className' => VacunasTable::class];
        $this->Vacunas = TableRegistry::get('Vacunas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Vacunas);

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
