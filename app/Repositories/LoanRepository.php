<?php

namespace App\Repositories;

use App\Models\Loan;

class LoanRepository
{
    public function create(array $data)
    {
        return Loan::create($data);
    }

    public function findById($id)
    {
        return Loan::with('user', 'book')->findOrFail($id);
    }

    public function update(Loan $loan, array $data)
    {
        $loan->update($data);
        return $loan;
    }

    public function delete(Loan $loan)
    {
        return $loan->delete();
    }

    public function all()
    {
        return Loan::with('user', 'book')->get();
    }
}

