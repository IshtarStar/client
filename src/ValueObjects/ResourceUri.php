<?php

declare(strict_types=1);

namespace OpenAI\ValueObjects;

use OpenAI\Contracts\Stringable;

/**
 * @internal
 */
final class ResourceUri implements Stringable
{
    /**
     * Creates a new ResourceUri value object.
     */
    private function __construct(private readonly string $uri)
    {
        // ..
    }

    /**
     * Creates a new ResourceUri value object that creates the given resource.
     */
    public static function create(string $resource): self
    {
        return new self($resource);
    }

    /**
     * Creates a new ResourceUri value object that uploads to the given resource.
     */
    public static function upload(string $resource): self
    {
        return new self($resource);
    }

    /**
     * Creates a new ResourceUri value object that lists the given resource.
     */
    public static function list(string $resource): self
    {
        return new self($resource);
    }

    /**
     * Creates a new ResourceUri value object that retrieves the given resource.
     */
    public static function retrieve(string $resource, string $id): self
    {
        return new self("{$resource}/{$id}");
    }

    /**
     * {@inheritDoc}
     */
    public function toString(): string
    {
        return $this->uri;
    }
}
