<?php
/**
 * Critical hit damage affix for belt entity.
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

namespace D3W\Calculator\Dto\Affix\CritDamage;

use D3W\Calculator\Dto\Affix\CritDamage;
use D3W\Calculator\Dto\Slot as CommonSlot;


/**
 * Critical hit damage.
 *
 * PHP version 5
 *
 * @category  Domain
 * @package   D3W\Calculator\Dto\Affix\CritDamage
 * @author    Angel <angel.blizzard.mvp@gmail.com>
 * @copyright 2015 Diablo3-Web
 * @license   GNU GPLv3
 * @link      https://github.com/Diablo3-Web
 */

class Belt extends CritDamage
{
    const MIN = 25.0;

    const MAX = 50.0;

    /**
     * Constructor.
     *
     * @param double $currentValue Current value.
     * @param double $minValue     Min value.
     * @param double $maxValue     Max value.
     */
    public function __construct($currentValue, $minValue = self::MIN, $maxValue = self::MAX)
    {
        $slot = new CommonSlot\Belt();
        parent::__construct($slot, $minValue, $maxValue, $currentValue);
    }


}