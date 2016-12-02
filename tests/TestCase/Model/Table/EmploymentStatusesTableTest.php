<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmploymentStatusesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmploymentStatusesTable Test Case
 */
class EmploymentStatusesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EmploymentStatusesTable
     */
    public $EmploymentStatuses;

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
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EmploymentStatuses') ? [] : ['className' => 'App\Model\Table\EmploymentStatusesTable'];
        $this->EmploymentStatuses = TableRegistry::get('EmploymentStatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EmploymentStatuses);

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
