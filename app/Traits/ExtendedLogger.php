<?php

namespace App\Traits;


trait ExtendedLogger
{
    /**
     * @param string $message
     * @param array $context
     */
    public function logAlert($message, $context = [])
    {
        $this->log('alert', $message, $context);
    }

    /**
     * @param string $message
     * @param array $context
     */
    public function logInfo($message, $context = [])
    {
        $this->log('info', $message, $context);
    }

    /**
     * @param string $message
     * @param array $context
     */
    public function logError($message, $context = [])
    {
        $this->log('error', $message, $context);
    }

    /**
     * @param \Exception $e
     * @param array $context
     * @param string $message
     */
    public function logException(\Exception $e, $context = [], $message = 'An error raised')
    {
        $context = array_replace_recursive([
            'code' => $e->getCode(),
            'message' => $e->getMessage(),
            'class' => get_class($e),
        ], $context);

        $this->log('error', $message, $context);
    }

    /**
     * @param string $type
     * @param string $message
     * @param array $context
     */
    private function log($type, $message, $context = [])
    {
        $class = class_basename($this);

        list($one, $two, $caller) = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 3);

        $method = $caller['function'];

        logger()->{$type}("{$class}:{$method} $message", $context);
    }
}