<?php

namespace App\Console\Commands;

use App\Category;
use Illuminate\Console\Command;
use Illuminate\Database\QueryException;

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
        try {
            Category::where('name', $choice)->delete();
        } catch (QueryException $e) {
            $this->alert("Category '$choice' couldn't be deleted. It is still linked to a post.");
            return;
        }
        $this->alert("Category '$choice' has been deleted");
    }
}
