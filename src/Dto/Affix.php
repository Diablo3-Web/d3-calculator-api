<?php
/**
 * Base affix entity.
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
 * Base affix entity.
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

abstract class Affix
{
    const TYPE_PRIMARY = 'primary';

    const TYPE_SECONDARY = 'secondary';

    const TYPE_LEGENDARY = 'legendary';

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var double
     */
    protected $minValue;

    /**
     * @var double
     */
    protected $maxValue;

    /**
     * @var double
     */
    protected $currentValue;

    /**
     * Constructor.
     *
     * @param string $type         Affix type.
     * @param string $name         Affix name.
     * @param double $minValue     Minimum value.
     * @param double $maxValue     Maximum value.
     * @param double $currentValue Current value.
     */
    public function __construct($type, $name, $minValue, $maxValue, $currentValue)
    {
        $this->type         = $type;
        $this->name         = $name;
        $this->minValue     = $minValue;
        $this->maxValue     = $maxValue;
        $this->currentValue = $currentValue;
    }

    /**
     * Get current value.
     *
     * @return float
     */
    public function getCurrentValue()
    {
        return $this->currentValue;
    }

    /**
     * Get max value.
     *
     * @return float
     */
    public function getMaxValue()
    {
        return $this->maxValue;
    }

    /**
     * Get min value.
     *
     * @return float
     */
    public function getMinValue()
    {
        return $this->minValue;
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