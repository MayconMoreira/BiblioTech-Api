<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Loan;
use Carbon\Carbon;

class ProcessOverdueLoans implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct()
    {
        //
    }

    public function handle()
    {
        $overdueLoans = Loan::whereNull('return_date')
            ->where('loan_date', '<', Carbon::now()->subDays(14))
            ->get();

        foreach ($overdueLoans as $loan) {
            $loan->update(['status' => 'overdue']);
        }
    }
}

