<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property int $role
 * @property Book[] $books
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const ROLE_ADMIN = 0;
    const ROLE_AUTHOR = 1;
    protected $withCount = ['books'];

    public static function getRoles(): array
    {
        return [
            self::ROLE_ADMIN => 'Админ',
            self::ROLE_AUTHOR => 'Автор',
        ];
    }

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function books(): HasMany
    {
        return $this->hasMany(Book::class, 'user_id', 'id');
    }

    public function getRole(): string
    {
        $roles = self::getRoles();
        foreach ($roles as $key => $role){
            if ($this->getAttribute('role') == $key)
                return $role;
        }
        return '';
    }
}
