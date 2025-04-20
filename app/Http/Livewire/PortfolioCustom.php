<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class PortfolioCustom extends Component
{
    public $page;
    public $list_id;
    public $category_id = 0;
    public $category_title = '';
    public $sub_category_id = 0;
    public $sub_category_title = '';
    public $sub_sub_category_id = 0;
    public $sub_sub_category_title = '';

    public $limit = 12;

    public function mount(){
        if($this->page != 'All'){
            $category = DB::connection('mysql2')
                ->table('portfolio_categories')
                ->where('list_id', $this->list_id)
                ->where('title', $this->page)
                ->first();
            if($category){
                $this->category_id = $category->id;
                $this->category_title = $category->title;
            }
        }

    }

    public function selectCategory($id)
    {
        $this->category_id = $id;

        $category = DB::connection('mysql2')
            ->table('portfolio_categories')
            ->where('list_id', $this->list_id)
            ->where('id', $id)
            ->first();

        if($category){
            $this->category_title = $category->title;
        } else {
            $this->category_title = '';
        }
        $this->dispatchBrowserEvent('updateUrl', [
            'title' => $this->category_title
        ]);
    }

    public function updatedSubCategoryId($id)
    {
        $this->sub_category_id = $id;

        $sub_category = DB::connection('mysql2')
            ->table('portfolio_sub_categories')
            ->where('list_id', $this->list_id)
            ->where('id', $id)
            ->first();

        if($sub_category){
            $this->sub_category_title = $sub_category->title;
        } else {
            $this->sub_category_title = '';
        }
    }

    public function updatedSubSubCategoryId($id)
    {
        $this->sub_sub_category_id = $id;

        $sub_category = DB::connection('mysql2')
        ->table('portfolio_sub_categories')
        ->where('list_id', $this->list_id)
        ->where('id', $id)
        ->first();

        if($sub_category){
            $this->sub_sub_category_title = $sub_category->title;
        } else {
            $this->sub_sub_category_title = '';
        }
    }

    public function increaseLimit()
    {
        $this->limit += 12;
    }

    public function render()
    {
        return view('livewire.portfolio-custom');
    }
}
