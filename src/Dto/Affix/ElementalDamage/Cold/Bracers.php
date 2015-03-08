<?php
/**
 * Cold damage affix for bracers entity.
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

namespace D3W\Calculator\Dto\Affix\ElementalDamage\Cold;

use D3W\Calculator\Dto\Affix\ElementalDamage\Cold;
use D3W\Calculator\Dto\Slot as CommonSlot;


/**
 * Elemental damage.
 *
 * PHP version 5
 *
 * @category  Domain
 * @package   D3W\Calculator\Dto\Affix\ElementalDamage\Cold
 * @author    Angel <angel.blizzard.mvp@gmail.com>
 * @copyright 2015 Diablo3-Web
 * @license   GNU GPLv3
 * @link      https://github.com/Diablo3-Web
 */

class Bracers extends Cold
{
    const MIN = 15.0;

    const MAX = 20.0;

    /**
     * Constructor.
     *
     * @param double $currentValue Current value.
     * @param double $minValue     Min value.
     * @param double $maxValue     Max value.
     */
    public function __construct($currentValue, $minValue = self::MIN, $maxValue = self::MAX)
    {
        $slot = new CommonSlot\Bracers();
        parent::__construct($slot, $minValue, $maxValue, $currentValue);
    }
}