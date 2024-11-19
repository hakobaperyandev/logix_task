<?php

namespace App\Jobs;

use App\Models\CompanyOrder;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;

class NotifyExpiration implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        
        $fiveDaysLeftContracts = CompanyOrder::whereDate('end', '=', Carbon::today()->addDays(5))->where('notified', false)->with('companies')->get();
        foreach ($fiveDaysLeftContracts as $contract) {
            $contract->update(['notified' => true]);
            Mail::raw('Only 5 days remain before the expiration of your account/service.', function ($message) use ($contract) {
                $message->to($contract->companies[0]->email)
                        ->subject('Test Email');
            });
            
        }
    }
}
