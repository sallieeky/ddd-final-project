<?php

namespace App\Console\Commands;

use App\Domains\Products\Models\Category;
use App\Domains\Products\Models\Product;
use App\Domains\Warehouse\Actions\CreateInventoryAction;
use App\Domains\Warehouse\Models\Warehouse;
use Illuminate\Console\Command;

class StoreInventoryCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'api:store-inventory
                            {--product= : The product name}
                            {--warehouse= : The warehouse name}
                            {--quantity= : The quantity of the product}';

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
        $product = Product::query()->where('name', $this->option('product'))->firstOrFail();
        $warehouse = Warehouse::query()->where('name', $this->option('warehouse'))->firstOrFail();

        $inventory = (new CreateInventoryAction())->execute(
            $product,
            $warehouse,
            $this->option('quantity')
        );

        $this->info('Inventory stored!');
    }
}
