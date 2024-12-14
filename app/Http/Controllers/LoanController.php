<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoanRequest;
use App\Services\LoanService;
use App\Http\Resources\LoanResource;

class LoanController extends Controller
{
    protected $loanService;

    public function __construct(LoanService $loanService)
    {
        $this->loanService = $loanService;
    }

    public function index()
    {
        $loans = $this->loanService->getAllLoans();
        return LoanResource::collection($loans);
    }

    public function store(LoanRequest $request)
    {
        $loan = $this->loanService->createLoan($request->validated());
        return new LoanResource($loan);
    }

    public function show($id)
    {
        $loan = $this->loanService->getLoan($id);
        return new LoanResource($loan);
    }

    public function update(LoanRequest $request, $id)
    {
        $loan = $this->loanService->updateLoan($id, $request->validated());
        return new LoanResource($loan);
    }

    public function destroy($id)
    {
        $this->loanService->deleteLoan($id);
        return response()->json(null, 204);
    }
}

