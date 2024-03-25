<?php

declare(strict_types=1);

namespace Potter\Logger\Aware;

use \Potter\Cloneable\CloneableInterface, \Psr\Log\LoggerInterface;

trait LoggerAwareTrait
{
    private LoggerInterface $logger;
    
    final public function getLogger(): LoggerInterface
    {
        return $this->logger;
    }
    
    final public function hasLogger(): bool
    {
        return $this->has('logger');
    }
    
    final protected function setLogger(LoggerInterface $logger): void
    {
        $this->logger = $logger;
    }
    
    final protected function withLogger(LoggerInterface $logger): LoggerAwareInterface
    {
        return $this->with('logger', $logger);
    }
    
    final protected function withoutLogger(): LoggerAwareInterface
    {
        return $this->without('logger');
    }
    
    abstract public function has(string $id): bool;
    abstract protected function with(string $id, mixed $entry): static;
    abstract protected function without(string $id): static;
}