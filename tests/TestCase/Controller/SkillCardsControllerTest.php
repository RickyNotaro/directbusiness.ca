<?php
namespace App\Test\TestCase\Controller;

use App\Controller\SkillCardsController;
use Cake\TestSuite\IntegrationTestCase;
use Cake\ORM\TableRegistry;
/**
 * App\Controller\SkillCardsController Test Case
 */
class SkillCardsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.skill_cards',
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
        'app.ready_to_travels',
        'app.can_work_fors',
        'app.cv_visibilities',
        'app.files',
        'app.cvs_language_levels_languages',
        'app.language_levels',
        'app.languages',
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
        $this->get("/Skill-Cards");
        $this->assertResponseOk();
    }
    
    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $SkillCards = TableRegistry::get("SkillCards");
        $entity = $SkillCards->find("all")->first();
        $this->get("/Skill-Cards/view/" . $entity->id);
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
    	$SkillCards = TableRegistry::get("SkillCards");
    	$entity = $SkillCards->find("all")->first();
    	$this->get("/Skill-Cards/delete/" . $entity->id);
    	$this->assertResponseOk();
    }
}
