<?php

namespace App\Services;

use App\Repositories\LoanRepository;

class LoanService
{
    protected $loanRepository;

    public function __construct(LoanRepository $loanRepository)
    {
        $this->loanRepository = $loanRepository;
    }

    public function createLoan(array $data)
    {
        return $this->loanRepository->create($data);
    }

    public function updateLoan($id, array $data)
    {
        $loan = $this->loanRepository->findById($id);
        return $this->loanRepository->update($loan, $data);
    }

    public function deleteLoan($id)
    {
        $loan = $this->loanRepository->findById($id);
        return $this->loanRepository->delete($loan);
    }

    public function getLoan($id)
    {
        return $this->loanRepository->findById($id);
    }

    public function getAllLoans()
    {
        return $this->loanRepository->all();
    }
}

