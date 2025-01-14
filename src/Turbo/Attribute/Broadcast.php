<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\UX\Turbo\Attribute;

use Symfony\UX\Turbo\Bridge\Mercure\Broadcaster;

/**
 * Marks the entity as broadcastable.
 *
 * @author Kévin Dunglas <kevin@dunglas.fr>
 *
 * @experimental
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
final class Broadcast
{
    public const ACTION_CREATE = 'create';
    public const ACTION_UPDATE = 'update';
    public const ACTION_REMOVE = 'remove';

    /**
     * @var mixed[]
     */
    public array $options;

    /**
     * Options can be any option supported by the broadcaster.
     *
     * @see Broadcaster for the default options when using Mercure
     */
    public function __construct(mixed ...$options)
    {
        $this->options = $options;
    }
}
