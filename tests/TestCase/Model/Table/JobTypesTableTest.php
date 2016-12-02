<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JobTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JobTypesTable Test Case
 */
class JobTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\JobTypesTable
     */
    public $JobTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.job_types',
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
        'app.users',
        'app.roles',
        'app.statuses',
        'app.enterprises',
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
        'app.skill_levels'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('JobTypes') ? [] : ['className' => 'App\Model\Table\JobTypesTable'];
        $this->JobTypes = TableRegistry::get('JobTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->JobTypes);

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