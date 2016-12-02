<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ReadyToTravelsController;
use Cake\TestSuite\IntegrationTestCase;
use Cake\ORM\TableRegistry;
/**
 * App\Controller\ReadyToTravelsController Test Case
 */
class ReadyToTravelsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ready_to_travels',
        'app.cvs',
        'app.career_levels',
        'app.employment_statuses',
        'app.jobs',
        'app.activity_areas',
        'app.enterprises',
        'app.users',
        'app.roles',
        'app.statuses',
        'app.candidates',
        'app.addresses',
        'app.state_provinces',
        'app.country_regions',
        'app.cover_letters',
        'app.cover_letter_models',
        'app.applys',
        'app.phones',
        'app.phone_types',
        'app.candidates_phones',
        'app.professions',
        'app.education_levels',
        'app.skill_levels',
        'app.job_types',
        'app.can_work_fors',
        'app.cv_visibilities',
        'app.files',
        'app.cvs_language_levels_languages',
        'app.language_levels',
        'app.languages',
        'app.skill_cards',
        'app.cvs_skill_cards',
        'app.working_licences',
        'app.cvs_working_licences'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->get("/Ready-To-Travels");
        $this->assertResponseOk();
    }
    
    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $ReadyToTravels = TableRegistry::get("ReadyToTravels");
        $entity = $ReadyToTravels->find("all")->first();
        $this->get("/Ready-To-Travels/view/" . $entity->id);
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
    	$ReadyToTravels = TableRegistry::get("ReadyToTravels");
    	$entity = $ReadyToTravels->find("all")->first();
    	$this->get("/Ready-To-Travels/delete/" . $entity->id);
    	$this->assertResponseOk();
    }
}
