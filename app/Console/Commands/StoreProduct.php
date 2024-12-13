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
    protected $signature = 'api:store-product
                            {--name= : The name of the product}
                            {--description= : The description of the product}
                            {--price= : The price of the product}';

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
            $this->option('name'),
            $this->option('description'),
            $this->option('price')
        );

        $this->info('Product stored!');
    }
}
