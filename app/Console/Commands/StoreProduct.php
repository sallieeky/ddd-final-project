<?php

namespace App\Console\Commands;

use App\Domains\Products\Actions\CreateProductAction;
use App\Domains\Products\Models\Category;
use Illuminate\Console\Command;

class StoreProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'api:store-product';

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
        $product = (new CreateProductAction())->execute(
            Category::first(),
            'Test Product',
            'Test Product Description',
            10.00
        );

        $this->info('Product stored!');
    }
}
