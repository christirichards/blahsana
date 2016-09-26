<?php

namespace app;

use Asana;

class User
{
    /**
     * Returns the full user record for the current user.
     *
     * @return string|null
     */

    public function getCurrentUser()
    {
        return Asana::getCurrentUser();
    }

    /**
     * Returns the full user record for a single user.
     *
     * @param  string $user_id
     *
     * @return string|null
     */

    public function getUserInfo($user_id = null)
    {
        return Asana::getUserInfo($user_id);
    }

    /**
     * Returns the user records for all users in all workspaces you have access.
     *
     * @return string|null
     */

    public function getAllUsers()
    {
        return Asana::getUsers();
    }
}
