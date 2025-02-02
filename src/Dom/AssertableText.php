<?php

declare(strict_types=1);

namespace Ziadoz\AssertableHtml\Dom;

use Stringable;
use Ziadoz\AssertableHtml\Concerns\AssertsText;
use Ziadoz\AssertableHtml\Support\Whitespace;
use Ziadoz\AssertableHtml\Traits\Debuggable;

final readonly class AssertableText implements Stringable
{
    use AssertsText, Debuggable;

    /** Create assertable text. */
    public function __construct(private string $text)
    {
    }

    /** Return the text (optionally whitespace normalised). */
    public function value(bool $normaliseWhitespace = false): string
    {
        return $normaliseWhitespace
            ? Whitespace::normalise($this->text)
            : $this->text;
    }

    /** Return the assertable text. */
    public function __toString(): string
    {
        return $this->text;
    }
}
