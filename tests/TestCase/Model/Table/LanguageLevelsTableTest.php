<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LanguageLevelsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LanguageLevelsTable Test Case
 */
class LanguageLevelsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LanguageLevelsTable
     */
    public $LanguageLevels;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.language_levels',
        'app.cvs_language_levels_languages',
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
        'app.skill_cards',
        'app.cvs_skill_cards',
        'app.working_licences',
        'app.cvs_working_licences',
        'app.languages'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('LanguageLevels') ? [] : ['className' => 'App\Model\Table\LanguageLevelsTable'];
        $this->LanguageLevels = TableRegistry::get('LanguageLevels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LanguageLevels);

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
