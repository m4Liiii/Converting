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

          // Fetch all records from the Cate table
          $cates = Cate::all();
          foreach ($cates as $cate) {
              Log::info('Source data (Cate):', $cate->toArray());
          }
  
          // Fetch all records from the Category table
          $categories = Category::all();
          foreach ($categories as $category) {
              Log::info('Target data (Category):', $category->toArray());
          }
  
          Log::info('Data migration test completed.');
  


    }
}
