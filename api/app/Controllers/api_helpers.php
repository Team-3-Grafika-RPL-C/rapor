<?php

namespace App\Controllers;

use App\Models\ApiModel;
use CodeIgniter\RESTful\ResourceController;
use Exception;
use PHPUnit\Framework\MockObject\Rule\AnyParameters;

class Api_helpers extends ResourceController
{
    public function __construct()
    {
        $this->model = new ApiModel();
    }

    // ----- Helpers Function ------//

    public function queryGetArray(string $query, bool | array $bind = false)
    {
        return !$bind ? json_decode(json_encode($this->model->db->query($query)->getResultArray()), true)
            : json_decode(json_encode($this->model->db->query($query, $bind)->getResultArray()), true);
    }

    public function queryGetFirst(string $query, bool | array $bind = false)
    {
        return !$bind ? json_decode(json_encode($this->model->db->query($query)->getFirstRow()), true)
            : json_decode(json_encode($this->model->db->query($query, $bind)->getFirstRow()), true);
    }

    public function queryExecute(string $query, bool | array $bind = false)
    {
        return !$bind ? $this->model->db->query($query) : $this->model->db->query($query, $bind);
    }
    /**
     * extend expiration on database
     */
    public function extendExpiredSession(string $token, bool $is_admin)
    {
        // $now_time = date("Y-m-d");
        try {
            $query = "UPDATE accounts.session ass SET expired_at = ? WHERE token = ?";
            $this->model->db->query($query, [($is_admin ? strtotime('+1 week') : strtotime('+35 seconds')), $token]);
        } catch (Exception $exception) {
            return false;
        }
        return true;
    }

    public function clearUnusedSession(string $token, Bool $is_included = false) // disabled activated session of mentioned token on databases
    {
        try {
            if ($is_included) {
                $query = "UPDATE users.user_session us SET is_login = FALSE WHERE us.id_user = (SElECT uss.id_user FROM users.user_session uss WHERE uss.token = ?) and us.is_login = TRUE";
                $this->model->db->query($query, [$token]);
            } else {
                $query = "UPDATE users.user_session us SET is_login = FALSE WHERE us.id_user = (SElECT uss.id_user FROM users.user_session uss WHERE uss.token = ?) and us.is_login = TRUE and us.token != ?";
                $this->model->db->query($query, [$token, $token]);
            }
        } catch (Exception $exception) {
            return false;
        }
        return true;
    }

    public function isAdmin(string $token)
    {
        $query = "SELECT a.is_admin FROM accounts.account a WHERE a.id = (SELECT ass.id_account FROM accounts.session ass WHERE ass.token = ?)";
        return $this->queryGetFirst($query, [$token])['is_admin'] == "t";
    }

    public function availableCheckerWithId(string $id, string $table)
    {
        $query = "SELECT count(x.id) as jml FROM $table x WHERE x.id = ? AND x.is_deleted != TRUE";
        return $this->queryGetFirst($query, [$id])['jml'] >= 1;
    }
}
