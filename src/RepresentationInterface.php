<?php

declare(strict_types=1);

namespace PhpContrib\Http\Representation;

use Stringable;

/**
 * A representation of an HTTP resource.
 *
 * @link https://www.ietf.org/rfc/rfc7231.txt
 */
interface RepresentationInterface extends Stringable
{
    /**
     * Retrieves the general type of the HTTP representation.
     *
     * @link https://www.ietf.org/rfc/rfc2046.txt
     */
    public function getMimeType(): string;
}
