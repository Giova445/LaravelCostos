<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseReport extends Model
{
    public function expenses()
    {
        return $this->hasMany(Expense::class); //relaciones con eloquent de 1 a M
    }
    use HasFactory;
}
