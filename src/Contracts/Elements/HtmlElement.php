<?php

declare(strict_types=1);

namespace Arcanedev\Html\Contracts\Elements;

use Arcanedev\Html\Contracts\Renderable;

/**
 * Interface  HtmlElement
 *
 * @author    ARCANEDEV <arcanedev.maroc@gmail.com>
 */
interface HtmlElement extends Renderable
{
    /* -----------------------------------------------------------------
     |  Getters & Setters
     | -----------------------------------------------------------------
     */

    /**
     * Get the element attributes.
     *
     * @return \Arcanedev\Html\Entities\Attributes
     */
    public function getAttributes();

    /* -----------------------------------------------------------------
     |  Main Methods
     | -----------------------------------------------------------------
     */

    /**
     * Set an attribute.
     *
     * @return $this
     */
    public function attribute(string $name, mixed $value = null): static;

    /**
     * Set the attributes.
     *
     * @return $this
     */
    public function attributes(iterable $attributes): static;
}
