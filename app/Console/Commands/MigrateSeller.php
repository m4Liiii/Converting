<?php

namespace App\Console\Commands;

use App\Models\Main\Seller;
use App\Models\Reben\Suplier;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class MigrateSeller extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:sellers';

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
    
        $Sups = Suplier::all();
    
        foreach ($Sups as $Sup) {
            Log::info('Source data (Sup):', $Sup->toArray());
    
            $sellerData = [
                'id' => $Sup->id,
                'name_seller' => $Sup->name,
                'debt_seller' => 0,
                'debt_first' => 0,
                'address' => $Sup->addr,
                'phone_number' => $Sup->tel,
                'type_curr' => 0,
                'type_delete' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            
    
            Seller::create($sellerData);
    
            Log::info('Inserted data (seller):', $sellerData);
        }
    
        Log::info('Data migration test completed.');
    }
}
