<?php

namespace App\Http\Livewire;

use App\Models\Topic;
use Livewire\Component;

class Search extends Component
{
    // 検索クエリ
    public $search = "";
    // 検索結果
    public $results = [];

    public function render()
    {
        if (strlen($this->search) >= 1) {
            $this->results = Topic::where(function ($query) {
                $query->where('title', 'like', '%' . $this->search . '%');
                //   ->orWhere('body', 'like', '%' . $this->search . '%')
            })->get();
        } else {
            $this->results = [];
        }

        return view('livewire.search');
    }
}
