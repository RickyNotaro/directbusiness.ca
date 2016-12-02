<?php
namespace App\Test\TestCase\Controller;

use App\Controller\CandidatesPhonesController;
use Cake\TestSuite\IntegrationTestCase;
use Cake\ORM\TableRegistry;

/**
 * App\Controller\CandidatesPhonesController Test Case
 */
class CandidatesPhonesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.candidates_phones',
        'app.phones',
        'app.phone_types',
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
        'app.addresses',
        'app.state_provinces',
        'app.country_regions'
    ];

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
    }

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->get("/Candidates-Phones");
        $this->assertResponseOk();
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
    	$entities = TableRegistry::get("CandidatesPhones");
    	$entity = $entities->find("all")->first();
    	$this->get("/Candidates-Phones/view/" . $entity->id);
    	$this->assertResponseOk();
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
    	$entities = TableRegistry::get("CandidatesPhones");
    	$entity = $entities->find("all")->first();
    	$this->get("/Candidates-Phones/delete/" . $entity->id);
    	$this->assertResponseOk();
    }
}
