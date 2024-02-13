<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;

class TotalProductCheck extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:total';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // return Command::SUCCESS;
        $totalProducts = Product::count(); // Replace 'Product' with your actual model name

        $this->info("Total number of products: $totalProducts");
    
    }
}
