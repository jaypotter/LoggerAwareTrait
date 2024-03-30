<?php

declare(strict_types=1);

namespace Potter\Logger\Aware;

use \Psr\{Container\ContainerInterface, Log\LoggerInterface};

trait LoggerAwareTrait
{
    private LoggerInterface $logger;
    
    final public function getLogger(): LoggerInterface
    {
        return $this->getContainer()->get('logger');
    }
    
    final public function hasLogger(): bool
    {
        return $this->getContainer()->has('logger');
    }
    
    abstract public function getContainer(): ContainerInterface;
}