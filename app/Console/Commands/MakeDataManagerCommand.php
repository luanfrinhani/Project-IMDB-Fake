<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class MakeDataManagerCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:data-manager {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new data-manager';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'DataManager';

    /**
     * @return string
     */
    protected function getStub(): string
    {
        return resource_path('stubs/DataManagerStub.php');
    }

    /**
     * @param string $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace . '\DataManager\System';
    }

    public function handle()
    {
        parent::handle();

        // Edita o datamanger criado com o nome da model e variavel.
        $modelName = Str::replace('DataManager', '', $this->getNameInput());
        $variableName = Str::lower($modelName);
        $filePath = App::basePath('app/DataManager/System/') . $this->getNameInput() . '.php';
        if (file_exists($filePath)) {
            $fileContent = file_get_contents($filePath);
            $fileContent = Str::replace('Dummy', $modelName, $fileContent);
            $fileContent = Str::replace('$dummy', '$' . $variableName, $fileContent);
            file_put_contents($filePath, $fileContent);
        }
    }
}
