<?php

declare(strict_types=1);

namespace AdgoalCommon\Task\Application\Processor;

/**
 * Interface JobConsumerInterface.
 */
interface JobConsumerInterface
{
    /**
     * @return string
     */
    public static function getRoute(): string;
}
