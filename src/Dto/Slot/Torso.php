<?php
/**
 * Torso slot entity.
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

namespace D3W\Calculator\Dto\Slot;

use D3W\Calculator\Dto\Slot;

/**
 * Torso.
 *
 * PHP version 5
 *
 * @category  Domain
 * @package   D3W\Calculator\Dto\Slot
 * @author    Angel <angel.blizzard.mvp@gmail.com>
 * @copyright 2015 Diablo3-Web
 * @license   GNU GPLv3
 * @link      https://github.com/Diablo3-Web
 */

class Torso extends Slot
{
    const NAME = 'torso';

    const NUMBER = 5;

    /**
     * Constructor.
     *
     * @param string $name   Slot name.
     * @param int    $number Slot number.
     */
    public function __construct($name = self::NAME, $number = self::NUMBER)
    {
        parent::__construct($name, $number);
    }
}