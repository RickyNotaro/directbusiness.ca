<?php
namespace App\Test\TestCase\Controller;

use App\Controller\EmploymentStatusesController;
use Cake\TestSuite\IntegrationTestCase;
use Cake\ORM\TableRegistry;
/**
 * App\Controller\EmploymentStatusesController Test Case
 */
class EmploymentStatusesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.employment_statuses',
        'app.cvs',
        'app.career_levels',
        'app.activity_areas',
        'app.enterprises',
        'app.users',
        'app.roles',
        'app.statuses',
        'app.jobs',
        'app.professions',
        'app.education_levels',
        'app.skill_levels',
        'app.job_types',
        'app.applys',
        'app.cover_letters',
        'app.cover_letter_models',
        'app.candidates',
        'app.addresses',
        'app.state_provinces',
        'app.country_regions',
        'app.phones',
        'app.phone_types',
        'app.candidates_phones',
        'app.ready_to_travels',
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
        $this->get("/Employment-Statuses");
        $this->assertResponseOk();
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
    	$entities = TableRegistry::get("EmploymentStatuses");
    	$entity = $entities->find("all")->first();
    	$this->get("/Employment-Statuses/view/" . $entity->id);
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
    	$entities = TableRegistry::get("EmploymentStatuses");
    	$entity = $entities->find("all")->first();
    	$this->get("/Employment-Statuses/delete/" . $entity->id);
    	$this->assertResponseOk();
    }
}
