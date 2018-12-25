<?php
namespace App;

use App\Entities\User;

class AuthManager {
    protected $user = false;
    protected static $authManager = null;

    protected function __construct()
    {
    }

    public static function get()
    {
        if (!self::$authManager) {
            self::$authManager = new self();
        }
        return self::$authManager;
    }

    public function guest()
    {
        return !$this->user();
    }

    public function user(): ?User
    {
        if ($this->user === false) {
            if (isset($_SESSION['user_id']) && $_SESSION['user_id'] !== null) {
                $this->loginById($_SESSION['user_id']);
            } else {
                $this->user = null;
            }
        }

        return $this->user;
    }

    public function loginById($userId)
    {
        $stmt = DB::get()->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$userId]);
        $user = $stmt->fetchObject(User::class);

        if ($user) {
            $_SESSION["user_id"] = $user->id;
        }

        $this->user = $user;

        return $user;
    }
}
