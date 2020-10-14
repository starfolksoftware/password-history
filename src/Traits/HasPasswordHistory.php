<?php

namespace StarfolkSoftware\PasswordHistory\Traits;

use Illuminate\Database\Eloquent\Relations\HasMany;
use StarfolkSoftware\PasswordHistory\PasswordHistory;

trait HasPasswordHistory {
    public function previousPasswords(): HasMany {
        return $this->hasMany(PasswordHistory::class, 'user_id');
    }
}
