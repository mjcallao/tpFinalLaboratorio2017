<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RegistroVacunasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RegistroVacunasTable Test Case
 */
class RegistroVacunasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RegistroVacunasTable
     */
    public $RegistroVacunas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.registro_vacunas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('RegistroVacunas') ? [] : ['className' => RegistroVacunasTable::class];
        $this->RegistroVacunas = TableRegistry::get('RegistroVacunas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RegistroVacunas);

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
