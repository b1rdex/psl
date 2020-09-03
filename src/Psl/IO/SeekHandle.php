<?php

declare(strict_types=1);

namespace Psl\IO;

/**
 * A handle that can have its' position changed.
 */
interface SeekHandle extends Handle
{
    /**
     * Move to a specific offset within a handle.
     *
     * Offset is relative to the start of the handle - so, the beginning of the
     * handle is always offset 0.
     *
     * @throws Exception\AlreadyClosedException  If the handle has been already closed.
     * @throws Exception\RuntimeException        If an error occurred during the operation.
     */
    public function seek(int $offset): void;

    /**
     * Get the current pointer position within a handle.
     *
     * @throws Exception\AlreadyClosedException If the handle has been already closed.
     * @throws Exception\RuntimeException       If an error occurred during the operation.
     */
    public function tell(): int;
}
