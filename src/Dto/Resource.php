<?php
/**
 * Base resource entity.
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
 * Base resource entity.
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

abstract class Resource
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var Spec
     */
    protected $spec;

    /**
     * Constructor.
     *
     * @param string $name Name of resource.
     * @param Spec   $spec Class, for which this resource is specific.
     */
    public function __construct($name, Spec $spec)
    {
        $this->name = $name;
        $this->spec = $spec;
    }

    /**
     * Get spec for resource.
     *
     * @return Spec
     */
    public function getSpec()
    {
        return $this->spec;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}