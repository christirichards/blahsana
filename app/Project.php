<?php

namespace app;

use Asana;

class Project
{
    /**
     * Returns all unarchived tasks of a given project
     *
     * @param  string $project_id
     *
     * @return string|null
     */

    public function getProjectTasks($project_id = null)
    {
        return Asana::getProjectTasks($project_id);
    }
}
