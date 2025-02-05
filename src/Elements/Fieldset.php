<?php

declare(strict_types=1);

namespace Arcanedev\Html\Elements;

/**
 * Class     Fieldset
 *
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class Fieldset extends HtmlElement
{
    /* -----------------------------------------------------------------
     |  Properties
     | -----------------------------------------------------------------
     */

    protected string $tag = 'fieldset';

    /* -----------------------------------------------------------------
     |  Main Methods
     | -----------------------------------------------------------------
     */

    /**
     * Set the legend.
     *
     * @return $this
     */
    public function legend(mixed $content): static
    {
        return $this->prependChild(
            Legend::make()->text($content)
        );
    }
}
