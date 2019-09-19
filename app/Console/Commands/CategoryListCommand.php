<?php

namespace App\Console\Commands;

use App\Category;
use Illuminate\Console\Command;

class CategoryListCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cf:category:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List all knowledgebase categories';

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
        $categories = Category::where('parent_id', 0)->get();
        $rows = [];
        foreach ($categories as $category) {
            $rows[$category->id] = [
                $category->id,
                $category->name,
                'Parent'
            ];
            foreach(Category::where('parent_id', $category->id)->get() as $subcategory) {
                $rows[$subcategory->id] = [
                    $subcategory->id,
                    $subcategory->name,
                    'Child'
                ];
            }
        }
        $this->table(['ID', 'Name', 'Type', 'Hidden'], $rows, 'symfony-style-guide');
    }
}
