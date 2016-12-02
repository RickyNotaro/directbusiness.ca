<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ApplysFixture
 *
 */
class ApplysFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'file_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cv_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'job_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'candidate_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cover_letter_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_applys_files1_idx' => ['type' => 'index', 'columns' => ['file_id'], 'length' => []],
            'fk_applys_cvs1_idx' => ['type' => 'index', 'columns' => ['cv_id'], 'length' => []],
            'fk_applys_jobs1_idx' => ['type' => 'index', 'columns' => ['job_id'], 'length' => []],
            'fk_applys_candidates1_idx' => ['type' => 'index', 'columns' => ['candidate_id'], 'length' => []],
            'fk_applys_cover_letters1_idx' => ['type' => 'index', 'columns' => ['cover_letter_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_applys_cvs1' => ['type' => 'foreign', 'columns' => ['cv_id'], 'references' => ['cvs', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_applys_jobs1' => ['type' => 'foreign', 'columns' => ['job_id'], 'references' => ['jobs', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_applys_cover_letters1' => ['type' => 'foreign', 'columns' => ['cover_letter_id'], 'references' => ['cover_letters', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_applys_candidates1' => ['type' => 'foreign', 'columns' => ['candidate_id'], 'references' => ['candidates', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_applys_files1' => ['type' => 'foreign', 'columns' => ['file_id'], 'references' => ['files', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'file_id' => 1,
            'cv_id' => 1,
            'job_id' => 1,
            'candidate_id' => 1,
            'cover_letter_id' => 1
        ],
    ];
}
