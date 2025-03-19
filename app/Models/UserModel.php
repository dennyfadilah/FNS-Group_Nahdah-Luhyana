<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['firstname', 'lastname', 'email', 'password', 'role', 'avatar'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required|valid_email|is_unique[users.email]',
        'role' => 'required',
        'password' => 'required|min_length[8]',
        'confirmPassword' => 'required|matches[password]',
        'avatar' => 'permit_empty|uploaded[avatar]|max_size[avatar,1024]|is_image[avatar]'
    ];
    protected $validationMessages   = [
        'firstname' => [
            'required' => 'First Name is required'
        ],
        'lastname' => [
            'required' => 'Last Name is required'
        ],
        'email' => [
            'is_unique' => 'Email already exists'
        ],
        'password' => [
            'min_length' => 'Password must be at least 8 characters'
        ],
        'confirmPassword' => [
            'matches' => 'Password does not match'
        ],
        'avatar' => [
            'uploaded' => 'Avatar is required',
            'max_size' => 'Avatar size is too large',
            'is_image' => 'Avatar must be an image'
        ]
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [
        'hashPassword'
    ];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [
        'hashPassword'
    ];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    protected function hashPassword(array $data)
    {
        if (isset($data['data']['password'])) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        }

        return $data;
    }
}
