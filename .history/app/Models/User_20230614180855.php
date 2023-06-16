<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    public const STATUS_CONFIRMED = 'STATUS_CONFIRMED';
    
    public const ROLE_ADMIN = 'مدیریت';

    public const ROLE_CUSTOMER = 'مشتری';

    public static function getRoles(): array
    {
        return [
            'ROLE_ADMIN' => self::ROLE_ADMIN,
            'ROLE_CUSTOMER' => self::ROLE_CUSTOMER,
        ];
    }


    /**
     * @return mixed
     */
    public function getStatuses(): ?array {
        return [
            'STATUS_UNCONFIRMED',
            'STATUS_CONFIRMED'
        ];

    }

    public function isConfirmedUser()
    {
        return (bool)($this->status == 'STATUS_CONFIRMED');
    }

    public function getRoleName($role = null): ?string
    {
        $role = $this->role ?? $role;
        return self::getRoles()[$role] ?? NULL;
    }

    public function isAdmin(): bool
    {
        return (bool)($this->role === 'ROLE_ADMIN');
    }

    public function isCustomer(): bool
    {
        return (bool)($this->role === 'ROLE_CUSTOMER');
    }

    public function isAwaitingConfirmation(): bool
    {
        return (($this->isProfileCompleted()) && (!$this->isConfirmedUser()));
    }
    

    public function getPublicFullName()
    {
        return $this->fullname ?? 'کاربر';
    }

    public function getPrivateFullName()
    {
        return $this->fullname ?? $this->mobile;
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function wallets()
    {
        return $this->hasMany(Wallet::class);
    }


    public function getWalletDeposits()
    {
        return  $this->wallets()->typeDeposit();
    }

    public function getWalletWithdraws()
    {
        return  $this->wallets()->typeWithdraw();
    }

    /**
     * @return mixed
     */
    public function validWallets()
    {
        return $this->wallets()->where('status', Wallet::STATUS_COMPLETED);
    }


        /**
     * @return mixed
     */
    public function deposit()
    {
        return $this->validWallets()
            ->where('type', Wallet::TYPE_DEPOSIT)
            ->sum('amount');
    }

    /**
     * @return mixed
     */
    public function withdraw()
    {
        return $this->validWallets()
            ->where('type', Wallet::TYPE_WITHDRAW)
            ->sum('amount');
    }

    /**
     * @return mixed
     */
    public function balance()
    {
        return ($this->deposit() - $this->withdraw());
    }

    public function getLinkGotoAccount()
    {
        return $this->isCustomer() ? 
                route('panel.index') 
                : route('dashboard.index');
    }



    public function isProfileCompleted(): bool
    {
        return (bool)$this->profile_completed;
    }

}
