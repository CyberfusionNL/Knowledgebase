<?php

namespace App\Console\Commands;

use App\Category;
use Illuminate\Console\Command;

class CategoryCreateCommand extends Command
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

        print('0. No parent' . PHP_EOL);
        foreach ($categories as $cat) {
            print($cat->id . '. ' . $cat->name . PHP_EOL);
        }
        print(PHP_EOL);
        $category->parent_id = $this->ask('Choose the parent category');
        $category->save();

    }
}
