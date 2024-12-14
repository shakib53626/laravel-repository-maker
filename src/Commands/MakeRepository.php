<?php

namespace Shakib53626\LaravelRepositoryMaker\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeRepository extends Command
{
    protected $signature = 'make:repository {name}';
    protected $description = 'Create a new repository class';

    public function handle()
    {
        $name = $this->argument('name');
        $repositoryPath = app_path("Repositories/{$name}.php");

        if (!File::exists(app_path('Repositories'))) {
            File::makeDirectory(app_path('Repositories'));
        }

        // Default methods for the repository
        $defaultMethods = <<<EOT
        public function index(\$request)
            {
                // Logic for listing resources
            }

            public function store(\$request)
            {
                // Logic for storing a new resource
            }

            public function show(\$id)
            {
                // Logic for displaying a single resource
            }

            public function update(\$request, \$id)
            {
                // Logic for updating a resource
            }

            public function delete(\$id)
            {
                // Logic for soft-deleting a resource
            }

            public function trashList(\$request)
            {
                // Logic for listing trashed resources
            }

            public function restore(\$id)
            {
                // Logic for restoring a trashed resource
            }

            public function permanentDelete(\$id)
            {
                // Logic for permanently deleting a resource
            }
        EOT;

        // Repository class template
        $repositoryTemplate = <<<EOT
        <?php

        namespace App\Repositories;

        class {$name}
        {
            {$defaultMethods}
        }

        ?>
        EOT;

        // Create Repository file
        File::put($repositoryPath, $repositoryTemplate);

        $this->info("Repository with default methods created successfully!");
    }
}
