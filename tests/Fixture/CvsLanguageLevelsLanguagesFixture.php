<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CvsLanguageLevelsLanguagesFixture
 *
 */
class CvsLanguageLevelsLanguagesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'cv_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'language_level_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'langage_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_cvs_language_levels_languages_cvs1_idx' => ['type' => 'index', 'columns' => ['cv_id'], 'length' => []],
            'fk_cvs_language_levels_languages_language_levels1_idx' => ['type' => 'index', 'columns' => ['language_level_id'], 'length' => []],
            'fk_cvs_language_levels_languages_languages1_idx' => ['type' => 'index', 'columns' => ['langage_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_cvs_language_levels_languages_cvs1' => ['type' => 'foreign', 'columns' => ['cv_id'], 'references' => ['cvs', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_cvs_language_levels_languages_language_levels1' => ['type' => 'foreign', 'columns' => ['language_level_id'], 'references' => ['language_levels', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_cvs_language_levels_languages_languages1' => ['type' => 'foreign', 'columns' => ['langage_id'], 'references' => ['languages', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'cv_id' => 1,
            'language_level_id' => 1,
            'langage_id' => 1
        ],
    ];
}
