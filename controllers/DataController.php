<?php

namespace Controller;

use RedBeanPHP\R;

class DataController
{
    public function createUser($username, $email, $password)
    {
        $user = [
            'username' => $username,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ];
        return R::store(R::dispense('users')->import($user));
    }

    public function loginUser($username, $password)
    {
        $user = R::findOne('users', 'username = ?', [$username]);
        if ($user && password_verify($password, $user->password)) {
            return $user->id;
        }
        return false;
    }

    public function updateUser($id, $username, $email, $password)
    {
        $user = R::load('users', $id);
        $user->username = $username;
        $user->email = $email;
        $user->password = password_hash($password, PASSWORD_DEFAULT);
        return R::store($user);
    }

    public function createPost($title, $content, $user_id)
    {
        $post = [
            'title' => $title,
            'content' => $content,
            'user_id' => $user_id
        ];
        return R::store(R::dispense('posts')->import($post));
    }
}
