<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CvsSkillCardsFixture
 *
 */
class CvsSkillCardsFixture extends TestFixture
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
        'skill_card_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_cvs_skill_cards_skill_cards1_idx' => ['type' => 'index', 'columns' => ['skill_card_id'], 'length' => []],
            'fk_cvs_skill_cards_cvs1_idx' => ['type' => 'index', 'columns' => ['cv_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_cvs_skill_cards_skill_cards1' => ['type' => 'foreign', 'columns' => ['cv_id'], 'references' => ['cvs', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_cvs_skill_cards_cvs1' => ['type' => 'foreign', 'columns' => ['skill_card_id'], 'references' => ['skill_cards', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'skill_card_id' => 1
        ],
    ];
}
