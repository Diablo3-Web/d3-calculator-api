<?php
/**
 * Base ability entity.
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
 * Base ability entity.
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

abstract class Ability
{
    const TYPE_ACTIVE = 'active';

    const TYPE_PASSIVE = 'passive';

    /**
     * @var string
     */
    protected $name;

    /**
     * @var double
     */
    protected $coolDown;

    /**
     * @var int
     */
    protected $resourceCost;

    /**
     * @var Resource
     */
    protected $resource;

    /**
     * @var double
     */
    protected $delay;

    /**
     * @var double
     */
    protected $duration;

    /**
     * Constructor.
     *
     * @param string   $name         Name.
     * @param double   $coolDown     Cooldown.
     * @param Resource $resource     Resource for ability.
     * @param int      $resourceCost Resource cost.
     * @param double   $delay        Delay before dealing an effect.
     * @param double   $duration     Duration of ability, 0 = instant.
     */
    public function __construct($name, $coolDown, Resource $resource, $resourceCost, $delay, $duration)
    {
        $this->name = $name;
        $this->coolDown = $coolDown;
        $this->resource = $resource;
        $this->resourceCost = $resourceCost;
        $this->delay = $delay;
        $this->duration = $duration;
    }

    /**
     * Get cool down.
     *
     * @return float
     */
    public function getCoolDown()
    {
        return $this->coolDown;
    }

    /**
     * Get delay.
     *
     * @return float
     */
    public function getDelay()
    {
        return $this->delay;
    }

    /**
     * Get duration.
     *
     * @return float
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Get name of ability.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get resource.
     *
     * @return Resource
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Get resource cost.
     *
     * @return int
     */
    public function getResourceCost()
    {
        return $this->resourceCost;
    }
}