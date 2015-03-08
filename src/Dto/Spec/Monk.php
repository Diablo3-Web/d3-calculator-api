<?php
/**
 * Monk class entity.
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

namespace D3W\Calculator\Dto\Spec;
use D3W\Calculator\Dto\Spec;

/**
 * Class entity.
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

class Monk extends Spec
{
    const NAME = 'Monk';

    const NUMBER = 4;

    /**
     * Constructor.
     *
     * @param string $name   Class name.
     * @param int    $number Class number.
     */
    public function __construct($name = self::NAME, $number = self::NUMBER)
    {
        $this->name   = $name;
        $this->number = $number;
    }
}