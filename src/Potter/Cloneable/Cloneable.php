<?php

declare(strict_types=1);

namespace Potter\Cloneable;

use \Potter\Container\{
    ContainerInterface,
    ContainerTrait,
    StaticContainerTrait
};

class Cloneable extends AbstractCloneable implements ContainerInterface
{
    use CloneableTrait, ContainerTrait, StaticContainerTrait;
}