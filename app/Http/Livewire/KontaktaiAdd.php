<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Kontaktai;


class KontaktaiAdd extends Component
{
    public $fullname;
    public $email;
    public $content;

    protected $rules = [
        'fullname' => 'required|min:1',
        'email' => 'required|min:1',
    ];

    public function save()
    {
        $this->validate();

        Kontaktai::create([
            'fullname' => $this->fullname,
            'email' => $this->email,
            'content' => $this->content,
        ]);

        return redirect()->to('/kontaktai');

    }

    public function render()
    {
        return view('livewire.kontaktai-add');
    }
}
