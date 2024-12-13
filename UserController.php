<?php

class UserController {
    public function update() {
        if (isset($_GET['id']) && isset($_GET['name'])) {
            $id = intval($_GET['id']);
            $name = htmlspecialchars($_GET['name']);

            if ($this->userExists($id)) {
                $this->updateUserName($id, $name);
                echo "User with ID $id has been updated with new name: $name";
            } else {
                echo "User with ID $id does not exist.";
            }
        } else {
            echo "Invalid request. Missing 'id' or 'name' parameter.";
        }
    }

    public function delete() {
        if (isset($_GET['id'])) {
            $id = intval($_GET['id']);

            if ($this->userExists($id)) {
                $this->deleteUser($id);
                echo "User with ID $id has been deleted.";
            } else {
                echo "User with ID $id does not exist.";
            }
        } else {
            echo "Invalid request. Missing 'id' parameter.";
        }
    }

    private function userExists($id) {
        return true;
    }

    private function updateUserName($id, $name) {
    }

    private function deleteUser($id) {
    }
}

$controller = new UserController();
$controller->update();
$controller->delete();


