<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Skelbimai;
use Illuminate\Support\Carbon;

class SkelbimaiAdd extends Component
{
    public $show, $pavadinimas, $tekstas;

    protected $rules = [
        'pavadinimas' => 'required|min:1',
        'tekstas' => 'required|min:1',
    ];

    protected $listeners = [
        'showPostCreate' => 'showPostCreate',
    ];

    public function mount()
    {
        $this->show = true;
    }

    public function showPostCreate()
    {
        $this->show = false;
    }

    public function cancelPostCreate()
    {
        $this->show = true;
    }

    public function clearFields()
    {
        $this->pavadinimas = null;
        $this->tekstas = null;
        $this->user_id = null;
    }

    public function save()
    {
        $this->validate();

        Skelbimai::create([
            'user_id' => Auth::user()->id,
            'pavadinimas' => $this->pavadinimas,
            'tekstas' => $this->tekstas,
            'created_at' => Carbon::now(),
        ]);

        $this->emit('skelbimasPridetas');
        $this->clearFields();
    }

    public function render()
    {
        return view('livewire.skelbimai-add');
    }
}
