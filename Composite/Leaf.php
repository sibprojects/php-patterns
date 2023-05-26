<?php

namespace Composite;

/**
 * The Sheet class represents the leaf objects of the structure. The sheet cannot have
 * nested components.
 *
 * Usually, Leaf objects do the actual work, while Leaf objects do the actual work.
 * Containers only delegate work to their subcomponents.
 */
class Leaf extends Component
{
    public function operation(): string
    {
        return "Leaf";
    }
}
