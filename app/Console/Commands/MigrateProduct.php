<?php

namespace App\Console\Commands;

use App\Models\Main\Product;
use App\Models\Reben\Rproduct;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MigrateProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:products';

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
    
        $Rprs = Rproduct::all();
    
        foreach ($Rprs as $Rpr) {
            Log::info('Source data (Rpr):', $Rpr->toArray());
    
            $productData = [
                'id' => $Rpr->id,
                'category_id' => $Rpr->idcate,
                'name_of_product' => $Rpr->item,
                'code_of_product' => $Rpr->codei,
                'quantity_of_box' => $Rpr->boxn,
                'quantity_of_store' => 0,
                'alert_of_out' => $Rpr->alertno,
                'price_of_buy' => $Rpr->pkd,
                'price_of_sell_tak' => $Rpr->pft,
                'price_of_sell_ko' => $Rpr->pfk,
                'ShowSelect' => 1,
                'type_delete' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            
    
            Product::create($productData);
    
            Log::info('Inserted data (product):', $productData);
        }
    
        Log::info('Data migration test completed.');
    }    
}
