<?php
/**
 * Slot affix entity.
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

namespace D3W\Calculator\Dto\Affix;

use D3W\Calculator\Dto\Affix;
use D3W\Calculator\Dto\Slot as CommonSlot;


/**
 * Slot.
 *
 * PHP version 5
 *
 * @category  Domain
 * @package   D3W\Calculator\Dto\Affix
 * @author    Angel <angel.blizzard.mvp@gmail.com>
 * @copyright 2015 Diablo3-Web
 * @license   GNU GPLv3
 * @link      https://github.com/Diablo3-Web
 */

abstract class Slot extends Affix
{
    /**
     * @var CommonSlot
     */
    protected $slot;

    /**
     * Constructor.
     *
     * @param string     $type         Affix type.
     * @param string     $name         Affix name.
     * @param CommonSlot $slot         Slot, to which affix is bound.
     * @param double     $minValue     Minimum value.
     * @param double     $maxValue     Maximum value.
     * @param double     $currentValue Current value.
     */
    public function __construct($type, $name, CommonSlot $slot, $minValue, $maxValue, $currentValue)
    {
        parent::__construct($type, $name, $minValue, $maxValue, $currentValue);
        $this->slot = $slot;
    }

    /**
     * Get affix slot.
     *
     * @return CommonSlot
     */
    public function getSlot()
    {
        return $this->slot;
    }
}