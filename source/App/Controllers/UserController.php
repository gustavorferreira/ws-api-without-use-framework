<?php


namespace Source\App\Controllers;

use Source\Models\User;

/**
 * Class UserController
 * @package Source\App\Controllers
 */
class UserController
{
    /**
     *
     */
    public function index()
    {
        $model = new User();
        $list = $model->find()->fetch(true);
        /** @var  $user User */
        foreach ($list as $user) {
            $callback[] = $user->data();
        }
        echo json_encode($callback);
    }

    /**
     *
     */
    public function create()
    {

    }

    /**
     * @param array $data
     */
    public function store(array $data)
    {
        $model = new User();
        $model->first_name = $data['first_name'];
        $model->last_name = $data['last_name'];
        $model->genre = $data['genre'];
        $model->created_at = "now()";
        $model->updated_at = null;
        $userId = $model->save();

        if ($userId) {
            $callback = [
                "sucess" => 1,
                "msg" => "User created."
            ];
        } else {
            $callback = [
                "sucess" => 0,
                "msg" => "User not inserted."
            ];
        }
        echo json_encode($callback);
    }

    /**
     * @param array $data
     */
    public function show(array $data)
    {
        $dataId = filter_var_array($data, FILTER_SANITIZE_NUMBER_INT);
        $model = (new User())->findById($dataId['id']);
        $user = $model->data();
        $callback = [
            "user" => $user,
            "msg" => 200
        ];
        echo json_encode($callback);
    }

    /**
     * @param array $data
     */
    public function update(array $data)
    {
        $dataId = filter_var_array($data, FILTER_SANITIZE_NUMBER_INT);
        $model = (new User())->findById($dataId['id']);
        $model->first_name = $data['first_name'];
        $model->last_name = $data['last_name'];
        $model->genre = $data['genre'];
        $model->updated_at = "now()";
        $model->save();
        $callback = [
            "success" => 1,
            "msg" => "User data updated."
        ];
        echo json_encode($callback);
    }

    /**
     * @param array $data
     */
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