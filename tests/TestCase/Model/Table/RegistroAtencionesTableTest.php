<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RegistroAtencionesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RegistroAtencionesTable Test Case
 */
class RegistroAtencionesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RegistroAtencionesTable
     */
    public $RegistroAtenciones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.registro_atenciones'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('RegistroAtenciones') ? [] : ['className' => RegistroAtencionesTable::class];
        $this->RegistroAtenciones = TableRegistry::get('RegistroAtenciones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RegistroAtenciones);

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
