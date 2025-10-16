<?php 
// app/Models/User.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $connection = 'mysql';
    protected $table = 'usuario';
    protected $primaryKey = 'id';
    public $timestamps = false;

    // campos
    public static $id = 'id';
    public static $email = 'email';
    public static $senha = 'senha';

    // Getters
    public function getTabela() { return $this->table; }
    public function getId() { return $this->attributes[User::$id]; }
    public function getEmail() { return $this->attributes[User::$email]; }
    public function getSenha() { return $this->attributes[User::$senha]; }

    // Setters
    public function setId($valor) { $this->attributes[User::$id] = $valor; }
    public function setEmail($valor) { $this->attributes[User::$email] = $valor; }
    public function setSenha($valor) { $this->attributes[User::$senha] = $valor; }
}
