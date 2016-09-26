<?php

namespace app;

use Asana;

class Workspace
{
    /**
     * Returns all the workspaces.
     *
     * @return string|null
     */

    public function getWorkspaces()
    {
        return Asana::getWorkspaces();
    }
}
