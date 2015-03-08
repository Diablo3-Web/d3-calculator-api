<?php
/**
 * Base armor entity.
 *
 * PHP version 5
 *
 * @category  D3W
 * @package   D3W\Calculator
 * @author    Angel <angel.blizzard.mvp@gmail.com>
 * @copyright 2015 Diablo3-Web
 * @license   GNU GPLv3
 * @link      https://github.com/Diablo3-Web
 */

namespace D3W\Calculator\Dto;

/**
 * Base armor entity.
 *
 * PHP version 5
 *
 * @category  Domain
 * @package   D3W\Calculator\Dto
 * @author    Angel <angel.blizzard.mvp@gmail.com>
 * @copyright 2015 Diablo3-Web
 * @license   GNU GPLv3
 * @link      https://github.com/Diablo3-Web
 */

abstract class Armor extends Item
{
    const TYPE = 'armor';

    /**
     * @var int
     */
    protected $armor;

    /**
     * Constructor
     *
     * @param string  $name           Name of item.
     * @param Slot[]  $slots          Slots, which item occupies.
     * @param int     $baseLevel      Base item level.
     * @param double  $durability     Item durability.
     * @param int     $armor          Item armor.
     * @param int     $requiredLevel  Required level.
     * @param Gem[]   $gems           Gems, added to the item.
     * @param Affix[] $allowedAffixes Allowed affixed to roll for item.
     * @param Affix[] $affixes        Item affixes.
     * @param bool    $accountBound   Flag of BoA.
     * @param int     $season         Number of season, when item was introduced.
     */
    public function __construct(
        $name,
        array $slots,
        $baseLevel,
        $durability,
        $armor,
        $requiredLevel = 1,
        array $gems = [],
        array $allowedAffixes = [],
        array $affixes = [],
        $accountBound = false,
        $season = 0
    )
    {
        parent::__construct($name, $slots, $baseLevel, $durability, $requiredLevel, $gems, $allowedAffixes, $affixes, $accountBound, $season);
        $this->type  = self::TYPE;
        $this->armor = $armor;
    }


}