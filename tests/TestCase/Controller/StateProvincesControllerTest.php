<?php
namespace App\Test\TestCase\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\StateProvincesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\StateProvincesController Test Case
 */
class StateProvincesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.state_provinces',
        'app.country_regions',
        'app.addresses',
        'app.candidates',
        'app.users',
        'app.roles',
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
        'app.cv_visibilities',
        'app.files',
        'app.applys',
        'app.cover_letters',
        'app.cover_letter_models',
        'app.cvs_language_levels_languages',
        'app.language_levels',
        'app.languages',
        'app.skill_cards',
        'app.cvs_skill_cards',
        'app.working_licences',
        'app.cvs_working_licences',
        'app.enterprises',
        'app.skill_levels',
        'app.job_types',
        'app.phones',
        'app.phone_types',
        'app.candidates_phones'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->get("/State-Provinces");
        $this->assertResponseOk();
    }
    
    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $StateProvinces = TableRegistry::get("StateProvinces");
        $entity = $StateProvinces->find("all")->first();
        $this->get("/State-Provinces/view/" . $entity->id);
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
    	$StateProvinces = TableRegistry::get("StateProvinces");
    	$entity = $StateProvinces->find("all")->first();
    	$this->get("/State-Provinces/delete/" . $entity->id);
    	$this->assertResponseOk();
    }
}
