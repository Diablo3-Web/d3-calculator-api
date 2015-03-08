<?php
/**
 * Critical hit damage affix entity.
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
use D3W\Calculator\Dto\Slot as CommonSlot;


/**
 * Critical hit damage.
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

abstract class CritDamage extends Slot
{
    const NAME = 'Critical hit damage';

    /**
     * Constructor.
     *
     * @param CommonSlot $slot         Slot, to which affix is bound.
     * @param double     $minValue     Minimum value.
     * @param double     $maxValue     Maximum value.
     * @param double     $currentValue Current value.
     */
    public function __construct(CommonSlot $slot, $minValue, $maxValue, $currentValue)
    {
        $name = self::NAME;
        $type = self::TYPE_PRIMARY;
        parent::__construct($type, $name, $slot, $minValue, $maxValue, $currentValue);
    }
}