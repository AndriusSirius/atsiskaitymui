<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SkelbimaiEdit extends Component
{
    public $skelbimas;

    public $edit, $delete;
    public $pavadinimas, $tekstas;

    protected function rules()
    {
        return [
            'pavadinimas' => 'min:1',
        ];
    }

    public function mount()
    {
        $this->edit = false;
        $this->delete = false;
        $this->pavadinimas = $this->skelbimas->pavadinimas;
        $this->tekstas = $this->skelbimas->tekstas;

    }

    public function showEdit()
    {
        $this->edit = true;
    }

    public function hideEdit()
    {
        $this->edit = false;
    }

    public function saveChanges()
    {

        $this->validate();

        $this->skelbimas->pavadinimas = $this->pavadinimas;
        $this->skelbimas->tekstas = $this->tekstas;


        $this->skelbimas->save();
    }

    public function delete()
    {
        $this->delete = true;
    }

    public function deleteCancel()
    {
        $this->delete = false;
    }

    public function deleteConfirm()
    {
        $this->skelbimas->delete();

        $this->emit('skelbimasIstrintas');
    }

    public function render()
    {
        return view('livewire.skelbimai-edit');
    }
}
