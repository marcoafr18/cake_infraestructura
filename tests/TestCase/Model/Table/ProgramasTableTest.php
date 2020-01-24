<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProgramasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProgramasTable Test Case
 */
class ProgramasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProgramasTable
     */
    public $Programas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Programas',
        'app.Avances',
        'app.Proyectos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Programas') ? [] : ['className' => ProgramasTable::class];
        $this->Programas = TableRegistry::getTableLocator()->get('Programas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Programas);

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
