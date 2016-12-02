<?php
namespace App\Test\TestCase\Controller;

use App\Controller\LanguagesController;
use Cake\TestSuite\IntegrationTestCase;
use Cake\ORM\TableRegistry;
/**
 * App\Controller\LanguagesController Test Case
 */
class LanguagesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.languages'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->get("/Languages");
        $this->assertResponseOk();
    }
    
    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $Languages = TableRegistry::get("Languages");
        $entity = $Languages->find("all")->first();
        $this->get("/Languages/view/" . $entity->id);
        $this->assertResponseOk();
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
    	$Languages = TableRegistry::get("Languages");
    	$entity = $Languages->find("all")->first();
    	$this->get("/Languages/delete/" . $entity->id);
    	$this->assertResponseOk();
    }
}
