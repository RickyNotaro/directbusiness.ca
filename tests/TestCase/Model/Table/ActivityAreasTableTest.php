<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActivityAreasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActivityAreasTable Test Case
 */
class ActivityAreasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ActivityAreasTable
     */
    public $ActivityAreas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.activity_areas',
        'app.cvs',
        'app.career_levels',
        'app.employment_statuses',
        'app.jobs',
        'app.professions',
        'app.statuses',
        'app.users',
        'app.roles',
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
        'app.enterprises',
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
        $config = TableRegistry::exists('ActivityAreas') ? [] : ['className' => 'App\Model\Table\ActivityAreasTable'];
        $this->ActivityAreas = TableRegistry::get('ActivityAreas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ActivityAreas);

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
