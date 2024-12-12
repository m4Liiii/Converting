<?php

namespace App\Console\Commands;

use App\Models\Reben\Cust;
use App\Models\Main\Customer;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MigrateCustomer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:customers';

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
    
        $Custs = Cust::all();
    
        foreach ($Custs as $Cust) {
            Log::info('Source data (Cust):', $Cust->toArray());
    
            $customerData = [
                'id' => $Cust->id,
                'name_customer' => $Cust->name,
                'debt_customer' => $Cust->qusd,
                'debt_first' => $Cust->qusd,
                'alert_of_debt' => $Cust->dayqard,
                'address' => $Cust->addr,
                'phone_number' => $Cust->tel,
                'type_customer' => 1,
                'type_delete' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            
    
            Customer::create($customerData);
    
            Log::info('Inserted data (customer):', $customerData);
        }
    
        Log::info('Data migration test completed.');
    }  
}
