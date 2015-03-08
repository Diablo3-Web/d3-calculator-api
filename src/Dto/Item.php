<?php
/**
 * Base item entity.
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
 * Base item entity.
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

abstract class Item
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $baseLevel;

    /**
     * @var int
     */
    protected $requiredLevel;

    /**
     * @var bool
     */
    protected $accountBound;

    /**
     * @var double
     */
    protected $durability;

    /**
     * @var Gem[]
     */
    protected $gems;

    /**
     * @var Slot[]
     */
    protected $slots;

    /**
     * @var Affix[]
     */
    protected $affixes;

    /**
     * @var Affix[]
     */
    protected $allowedAffixes;

    /**
     * @var int
     */
    protected $season;

    /**
     * Constructor
     *
     * @param string  $name           Name of item.
     * @param Slot[]  $slots          Slots, which item occupies.
     * @param int     $baseLevel      Base item level.
     * @param double  $durability     Item durability.
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
        $requiredLevel = 1,
        array $gems = [],
        array $allowedAffixes = [],
        array $affixes = [],
        $accountBound = false,
        $season = 0
    )
    {
        $this->name           = $name;
        $this->slots          = $slots;
        $this->baseLevel      = $baseLevel;
        $this->durability     = $durability;
        $this->requiredLevel  = $requiredLevel;
        $this->gems           = $gems;
        $this->accountBound   = $accountBound;
        $this->season         = $season;
        $this->affixes        = $affixes;
        $this->allowedAffixes = $allowedAffixes;
    }

    /**
     * Get allowed affixes for the item.
     *
     * @return Affix[]
     */
    public function getAllowedAffixes()
    {
        return $this->allowedAffixes;
    }

    /**
     * Get affixes.
     *
     * @return Affix[]
     */
    public function getAffixes()
    {
        return $this->affixes;
    }

    /**
     * Get item flag of account-bound.
     *
     * @return boolean
     */
    public function isAccountBound()
    {
        return $this->accountBound;
    }

    /**
     * Get item base level.
     *
     * @return int
     */
    public function getBaseLevel()
    {
        return $this->baseLevel;
    }

    /**
     * Get item durability.
     *
     * @return float
     */
    public function getDurability()
    {
        return $this->durability;
    }

    /**
     * Get item gems.
     *
     * @return Gem[]
     */
    public function getGems()
    {
        return $this->gems;
    }

    /**
     * Get item name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get item required level.
     *
     * @return int
     */
    public function getRequiredLevel()
    {
        return $this->requiredLevel;
    }

    /**
     * Get item season number.
     *
     * @return int
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * Get item slots.
     *
     * @return Slot[]
     */
    public function getSlots()
    {
        return $this->slots;
    }

    /**
     * Get item type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}