<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CandidatesPhonesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CandidatesPhonesTable Test Case
 */
class CandidatesPhonesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CandidatesPhonesTable
     */
    public $CandidatesPhones;

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
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CandidatesPhones') ? [] : ['className' => 'App\Model\Table\CandidatesPhonesTable'];
        $this->CandidatesPhones = TableRegistry::get('CandidatesPhones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CandidatesPhones);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
