<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class UpdateCurrencySettings extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'settings:update-currency';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update existing general settings with default currency values';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Update existing records with default currency values
        DB::table('general_settings')
            ->whereNull('currency_code')
            ->orWhere('currency_code', '')
            ->update([
                'currency_code' => 'USD',
                'currency_symbol' => '$',
                'currency_name' => 'US Dollar'
            ]);

        $this->info('Currency settings updated successfully!');

        return 0;
    }
}