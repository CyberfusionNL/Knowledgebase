<?php

namespace App\Console\Commands;

use App\Category;
use Illuminate\Console\Command;

class CategoryDeleteCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cf:category:delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete knowledgebase category';

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
        $categories = Category::all(['id', 'name']);
        $catIds = [];// Map this in the future
        foreach ($categories as $cat) {
            $catIds[$cat->id] = $cat->name;
        }

        $choice = $this->choice('Which category do you want to delete?', $catIds);
        Category::where('name', $choice)->delete();
        $this->alert("Category '$choice' has been deleted");
    }
}
