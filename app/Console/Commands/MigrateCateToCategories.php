<?php

namespace App\Console\Commands;

use App\Models\Reben\Cate;
use App\Models\Main\Category;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MigrateCateToCategories extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:categories';

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
    
        $cates = Cate::all();
    
        foreach ($cates as $cate) {
            Log::info('Source data (Cate):', $cate->toArray());
    
            $categoryData = [
                'id' => $cate->id,
                'name' => $cate->cate,
                'code' => $cate->codec,
                'type_delete' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            
    
            Category::create($categoryData);
    
            Log::info('Inserted data (Category):', $categoryData);
        }
    
        Log::info('Data migration test completed.');
    }    
    }

