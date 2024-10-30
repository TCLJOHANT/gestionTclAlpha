<?php

namespace App\Observers;

use App\Models\Expense;

class ExpenseObserver
{
    public function creating(Expense $expense)
    {
        $expense->user_id = auth()->user()->id;
    }
}
