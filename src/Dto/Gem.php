<?php
/**
 * Base gem entity.
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
 * Base gem entity.
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

abstract class Gem extends Item
{
    const TYPE = 'gem';

    /**
     * Constructor
     *
     * @param string $name          Name of item.
     * @param Slot[] $slots         Slots, which item occupies.
     * @param int    $baseLevel     Base item level.
     * @param double $durability    Item durability.
     * @param int    $requiredLevel Required level.
     * @param Gem[]  $gems          Gems, added to the item.
     * @param bool   $accountBound  Flag of BoA.
     * @param int    $season        Number of season, when item was introduced.
     */
    public function __construct($name, array $slots, $baseLevel, $durability, $requiredLevel = 1, $gems = [], $accountBound = false, $season = 0)
    {
        parent::__construct($name, $slots, $baseLevel, $durability, $requiredLevel, $gems, $accountBound, $season);
        $this->type = self::TYPE;
    }
}