<?php
/**
 * Helm item entity.
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

namespace D3W\Calculator\Dto\Armor;

use D3W\Calculator\Dto\Armor;
use D3W\Calculator\Dto\Gem;
use D3W\Calculator\Dto\Affix;

/**
 * Helm.
 *
 * PHP version 5
 *
 * @category  Domain
 * @package   D3W\Calculator\Dto\Armor
 * @author    Angel <angel.blizzard.mvp@gmail.com>
 * @copyright 2015 Diablo3-Web
 * @license   GNU GPLv3
 * @link      https://github.com/Diablo3-Web
 */

class Helm extends Armor
{
    const TYPE = 'helm';

    /**
     * Constructor
     *
     * @param string  $name           Name of item.
     * @param int     $baseLevel      Base item level.
     * @param double  $durability     Item durability.
     * @param int     $armor          Item armor.
     * @param int     $requiredLevel  Required level.
     * @param Gem[]   $gems           Gems, added to the item.
     * @param Affix[] $affixes        Item affixes.
     * @param bool    $accountBound   Flag of BoA.
     * @param int     $season         Number of season, when item was introduced.
     */
    public function __construct(
        $name,
        $baseLevel,
        $durability,
        $armor,
        $requiredLevel = 1,
        array $gems = [],
        array $affixes = [],
        $accountBound = false,
        $season = 0
    )
    {
        $slots          = [new \D3W\Calculator\Dto\Slot\Helm()];
        $allowedAffixes = [new Affix\CritChance(null)];
        parent::__construct($name, $slots, $baseLevel, $durability, $armor, $requiredLevel, $gems, $allowedAffixes, $affixes, $accountBound, $season);
    }
}