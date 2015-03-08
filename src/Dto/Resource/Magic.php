<?php
/**
 * Magic resource entity.
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
 * Magic.
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

class Magic extends Resource
{
    const NAME = 'Magic';

    /**
     * @param string $name Name.
     * @param Spec   $spec Spec.
     */
    public function __construct($name = self::NAME, Spec $spec = null)
    {
        $spec = isset($spec) ? $spec : new Spec\Wizard();
        parent::__construct($name, $spec);
    }
}