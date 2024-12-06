<?php

namespace App\Console\Commands;

use App\Models\Reben\GDebt;
use App\Models\Main\GetDebt;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MigrateGetDebt extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:GetDebt';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Log::info('Starting data migration test...');
    
        $GDebts = GDebt::where('ids', '!=', 0)->get();
    
        foreach ($GDebts as $GDebt) {
            Log::info('Source data (GDebt):', $GDebt->toArray());
    
            $GDebtsData = [
                'id' => $GDebt->id,
                's_id' => $GDebt->id,
                'customer_id' => $GDebt->ids,
                'user_id' => 1,
                'old_debt' => $GDebt->totalo,
                'amount_of_debt' => $GDebt->paid,
                'discount' => $GDebt->disc,
                'amount_dinar' => 0,
                'amount_dollar' => 0,
                'new_debt' => $GDebt->remaind,
                'name_of_recipient' => $GDebt->pnamed,
                'name_of_office' => $GDebt->nusinga,
                'notice_of_debt' => $GDebt->note,
                'curr' => $GDebt->jpara,
                'delivery' => 1,
                'type_notice' => 0,
                'type_price' => 1,
                'type_amount' => 0,
                'type_invoice' => $GDebt->jfisha == 2 ? 1 : $GDebt->jfisha,
                'type_delete' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            
    
            GetDebt::create($GDebtsData);
    
            Log::info('Inserted data (GetDebt):', $GDebtsData);
        }
    
        Log::info('Data migration test completed.');
    }
}
