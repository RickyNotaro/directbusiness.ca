<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CvsFixture
 *
 */
class CvsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'cvName' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'position_sought' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'minimum_wage' => ['type' => 'decimal', 'length' => 2, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'maximum_wage' => ['type' => 'decimal', 'length' => 2, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'position_location' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'current_employer' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ready_to_relocate' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'start_date' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'career_level_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'employment_status_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'activity_area_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'profession_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'education_level_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ready_to_travel_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'can_work_for_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'candidate_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cv_visibility_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'views' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_cvs_career_levels1_idx' => ['type' => 'index', 'columns' => ['career_level_id'], 'length' => []],
            'fk_cvs_employment_status1_idx' => ['type' => 'index', 'columns' => ['employment_status_id'], 'length' => []],
            'fk_cvs_activity_areas1_idx' => ['type' => 'index', 'columns' => ['activity_area_id'], 'length' => []],
            'fk_cvs_professions1_idx' => ['type' => 'index', 'columns' => ['profession_id'], 'length' => []],
            'fk_cvs_education_levels1_idx' => ['type' => 'index', 'columns' => ['education_level_id'], 'length' => []],
            'fk_cvs_ready_to_travels1_idx' => ['type' => 'index', 'columns' => ['ready_to_travel_id'], 'length' => []],
            'fk_cvs_can_work_fors1_idx' => ['type' => 'index', 'columns' => ['can_work_for_id'], 'length' => []],
            'fk_cvs_candidates1_idx' => ['type' => 'index', 'columns' => ['candidate_id'], 'length' => []],
            'fk_cvs_cv_visibilities1_idx' => ['type' => 'index', 'columns' => ['cv_visibility_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_cvs_career_levels1' => ['type' => 'foreign', 'columns' => ['career_level_id'], 'references' => ['career_levels', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_cvs_employment_status1' => ['type' => 'foreign', 'columns' => ['employment_status_id'], 'references' => ['employment_statuses', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_cvs_activity_areas1' => ['type' => 'foreign', 'columns' => ['activity_area_id'], 'references' => ['activity_areas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_cvs_professions1' => ['type' => 'foreign', 'columns' => ['profession_id'], 'references' => ['professions', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_cvs_education_levels1' => ['type' => 'foreign', 'columns' => ['education_level_id'], 'references' => ['education_levels', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_cvs_ready_to_travels1' => ['type' => 'foreign', 'columns' => ['ready_to_travel_id'], 'references' => ['ready_to_travels', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_cvs_can_work_fors1' => ['type' => 'foreign', 'columns' => ['can_work_for_id'], 'references' => ['can_work_fors', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_cvs_candidates1' => ['type' => 'foreign', 'columns' => ['candidate_id'], 'references' => ['candidates', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_cvs_cv_visibilities1' => ['type' => 'foreign', 'columns' => ['cv_visibility_id'], 'references' => ['cv_visibilities', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'cvName' => 'Lorem ipsum dolor sit amet',
            'position_sought' => 'Lorem ipsum dolor sit amet',
            'minimum_wage' => 1.5,
            'maximum_wage' => 1.5,
            'position_location' => 'Lorem ipsum dolor sit amet',
            'current_employer' => 'Lorem ipsum dolor sit amet',
            'ready_to_relocate' => 1,
            'start_date' => '2016-11-23',
            'career_level_id' => 1,
            'employment_status_id' => 1,
            'activity_area_id' => 1,
            'profession_id' => 1,
            'education_level_id' => 1,
            'ready_to_travel_id' => 1,
            'can_work_for_id' => 1,
            'candidate_id' => 1,
            'cv_visibility_id' => 1,
            'views' => 1
        ],
    ];
}
