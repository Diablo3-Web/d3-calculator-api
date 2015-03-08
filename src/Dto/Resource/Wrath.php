<?php
/**
 * Wrath resource entity.
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

namespace D3W\Calculator\Dto\Resource;
use D3W\Calculator\Dto\Resource;
use D3W\Calculator\Dto\Spec;

/**
 * Wrath.
 *
 * PHP version 5
 *
 * @category  Domain
 * @package   D3W\Calculator\Dto\Resource
 * @author    Angel <angel.blizzard.mvp@gmail.com>
 * @copyright 2015 Diablo3-Web
 * @license   GNU GPLv3
 * @link      https://github.com/Diablo3-Web
 */

class Wrath extends Resource
{
    const NAME = 'Wrath';

    /**
     * @param string $name Name.
     * @param Spec   $spec Spec.
     */
    public function __construct($name = self::NAME, Spec $spec = null)
    {
        $spec = isset($spec) ? $spec : new Spec\Crusader();
        parent::__construct($name, $spec);
    }
}