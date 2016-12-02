<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WorkingLicencesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WorkingLicencesTable Test Case
 */
class WorkingLicencesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WorkingLicencesTable
     */
    public $WorkingLicences;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.working_licences',
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
        'app.skill_cards',
        'app.cvs_skill_cards',
        'app.cvs_working_licences'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('WorkingLicences') ? [] : ['className' => 'App\Model\Table\WorkingLicencesTable'];
        $this->WorkingLicences = TableRegistry::get('WorkingLicences', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WorkingLicences);

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
