<?php

declare(strict_types=1);

namespace Ziadoz\AssertableHtml\Traits;

use ArrayAccess;
use Stringable;

trait Debuggable
{
    public function dump(): void
    {
        if ($this instanceof ArrayAccess) {
            dump($this->toArray());
        } elseif ($this instanceof Stringable) {
            dump($this->text);
        } else {
            dump($this->getHtml());
        }
    }

    public function dd(): never
    {
        if ($this instanceof ArrayAccess) {
            dd($this->toArray());
        } elseif ($this instanceof Stringable) {
            dd($this->text);
        } else {
            dd($this->getHtml());
        }
    }
}
