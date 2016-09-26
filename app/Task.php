<?php

namespace app;

use Asana;

class Task
{
    /**
     * Returns task information
     *
     * @param  string $task_id
     *
     * @return string|null
     */

    public function getTask($task_id = null)
    {
        return Asana::getTask($task_id);
    }

    /**
     * Returns sub-task information
     *
     * @param  string $task_id
     *
     * @return string|null
     */
    
    public function getSubtasks($task_id = null)
    {
        return Asana::getSubTasks($task_id);
    }
}
