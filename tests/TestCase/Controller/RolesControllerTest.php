<?php
namespace App\Test\TestCase\Controller;

use App\Controller\RolesController;
use Cake\TestSuite\IntegrationTestCase;
use Cake\ORM\TableRegistry;
/**
 * App\Controller\RolesController Test Case
 */
class RolesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.roles',
        'app.users',
        'app.statuses',
        'app.jobs',
        'app.activity_areas',
        'app.cvs',
        'app.career_levels',
        'app.employment_statuses',
        'app.professions',
        'app.education_levels',
        'app.ready_to_travels',
        'app.can_work_fors',
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
        'app.cv_visibilities',
        'app.files',
        'app.cvs_language_levels_languages',
        'app.language_levels',
        'app.languages',
        'app.skill_cards',
        'app.cvs_skill_cards',
        'app.working_licences',
        'app.cvs_working_licences',
        'app.enterprises',
        'app.skill_levels',
        'app.job_types'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->get("/Roles");
        $this->assertResponseOk();
    }
    
    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $Roles = TableRegistry::get("Roles");
        $entity = $Roles->find("all")->first();
        $this->get("/Roles/view/" . $entity->id);
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
    	$Roles = TableRegistry::get("Roles");
    	$entity = $Roles->find("all")->first();
    	$this->get("/Roles/delete/" . $entity->id);
    	$this->assertResponseOk();
    }
}
