<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class CreateModels extends Command
{
    protected $signature = 'make:models {models*}';

    protected $description = 'Create multiple models';

    public function handle()
    {
        $models = $this->argument('models');

        foreach ($models as $model) {
            $options = ['name' => $model];
            Artisan::call('make:model', $options);
            $this->info("Model {$model} created successfully.");
        }

        return 0;
    }
}