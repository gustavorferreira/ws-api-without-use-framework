<?php


namespace Source\App\Controllers;

use Source\Models\User;

class Login
{
    public function home(): void
    {
        echo "Bem Vindo";
    }

    public function userProfile(array $data): void
    {
        $dataId = filter_var_array($data, FILTER_SANITIZE_NUMBER_INT);
        $user = (new User())->findById($dataId['id']);
        $callback = [
            "First name" => $user->first_name,
            "Last name" => $user->last_name,
            "Genre" => $user->genre,
            "Id" => $user->id
        ];
        echo json_encode($callback);
    }

    public function listUsers(): void
    {
        $user = new User();
        $list = $user->find()->fetch(true);

        /** @var $userId User */
        foreach ($list as $userId) {
            $callback[] = $userId->data();
        }
        echo json_encode($callback);
    }

    public function update(array $data): void
    {
        /** @var  $user User */
        $dataId = filter_var_array($data, FILTER_SANITIZE_NUMBER_INT);
        $user = (new User())->findById($dataId['id']);
        $user->first_name = $data['first_name'];
        $user->last_name = $data['last_name'];
        $userId = $user->save();

        if ($userId) {
            $callback = [
                "sucess" => 1
            ];
        } else {
            $callback = [
                "error" => 0
            ];
        }
        echo $callback;
    }
}