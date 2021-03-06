<?php


namespace Source\App\Controllers;

use Source\Models\User;

class UserController
{

    public function index()
    {
        $model = new User();
        $list = $model->find()->order("id desc")->fetch(true);
        $count = $model->count();
        if ($count > 0) {
            $user = $model->data();
            /** @var  $user User */
            foreach ($list as $user) {
                $callback[] = $user->data();
            }
        } else {
            $callback = [
                "success" => 0,
                "msg" => "Not exist users.",
            ];
        }
        echo json_encode($callback);
    }

    public function create()
    {

    }

    public function store(array $data)
    {
        if (empty($data)) {
            $callback = [
                "success" => 0,
                "msg" => "Please fill all the required fields."
            ];
        } else {
            $model = new User();
            $model->first_name = $data['first_name'];
            $model->last_name = $data['last_name'];
            $userId = $model->save();
            if ($userId) {
                $callback = [
                    "success" => 1,
                    "msg" => "User created."
                ];
            } else {
                $callback = [
                    "success" => 0,
                    "msg" => "User not inserted."
                ];
            }
        }
        echo json_encode($callback);
    }

    public function show(array $data)
    {
        $dataId = filter_var_array($data, FILTER_SANITIZE_NUMBER_INT);
        $model = (new User())->findById($dataId['id']);
        if ($model) {
            $user = $model->data();
            $callback = [
                "user" => $user,
                "success" => 1,
                "msg" => 200
            ];
        } else {
            $callback = [
                "success" => 0,
                "msg" => "User not found.",
            ];
        }
        echo json_encode($callback);
    }

    public function update(array $data)
    {
        if (empty($data)) {
            $callback = [
                "success" => 0,
                "msg" => "Please fill all the required fields."
            ];
        } else {
            $dataId = filter_var_array($data, FILTER_SANITIZE_NUMBER_INT);
            $model = (new User())->findById($dataId['id']);
            $model->first_name = $data['first_name'];
            $model->last_name = $data['last_name'];
            $userId = $model->save();
            if ($userId) {
                $callback = [
                    "success" => 1,
                    "msg" => "User data updated."
                ];
            } else {
                $callback = [
                    "success" => 0,
                    "msg" => "User not updated."
                ];
            }
        }
        echo json_encode($callback);
    }

    public function destroy(array $data)
    {
        $dataId = filter_var_array($data, FILTER_SANITIZE_NUMBER_INT);
        $model = (new User())->findById($dataId['id']);
        $model->destroy();
        $callback = [
            "success" => 1,
            "msg" => "User deleted."
        ];
        echo json_encode($callback);
    }
}