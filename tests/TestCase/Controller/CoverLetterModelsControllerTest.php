<?php
namespace App\Test\TestCase\Controller;

use App\Controller\CoverLetterModelsController;
use Cake\TestSuite\IntegrationTestCase;
use Cake\ORM\TableRegistry;
/**
 * App\Controller\CoverLetterModelsController Test Case
 */
class CoverLetterModelsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cover_letter_models',
        'app.cover_letters',
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
        'app.addresses',
        'app.state_provinces',
        'app.country_regions',
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
        $this->get("/Cover-Letter-Models");
        $this->assertResponseOk();
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
    	$entities = TableRegistry::get("CoverLetterModels");
    	$entity = $entities->find("all")->first();
    	$this->get("/Cover-Letter-Models/view/" . $entity->id);
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
    	$entities = TableRegistry::get("CoverLetterModels");
    	$entity = $entities->find("all")->first();
    	$this->get("/Cover-Letter-Models/delete/" . $entity->id);
    	$this->assertResponseOk();
    }
}
