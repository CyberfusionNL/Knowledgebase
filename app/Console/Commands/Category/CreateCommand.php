<?php

namespace App\Console\Commands\Category;

use App\Models\Category;
use Illuminate\Console\Command;

class CreateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cf:category:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Knowledgebase category';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $category = new Category;
        $categories = Category::all();
        $category->name = $this->ask('What should we call the category?');
        $category->type = $this->choice('What type of category is this?', ['learn', 'explore', 'changes']);

        echo '0. No parent'.PHP_EOL;
        foreach ($categories as $cat) {
            echo $cat->id.'. '.$cat->name.PHP_EOL;
        }
        echo PHP_EOL;
        $category->parent_id = $this->ask('Choose the parent category');
        $category->save();
    }
}
