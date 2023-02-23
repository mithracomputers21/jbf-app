<?php

namespace App\Http\Livewire;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;

class Join extends Component implements HasForms
{
    use InteractsWithForms;

    public $name = '';

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('name')->maxLength(255)->required(),
            TextInput::make('address')->maxLength(255)->required(),
            TextInput::make('phone_number')->required()->length(10),
            TextInput::make('email')->email()->required(),
        ];
    }
    
    public function join(): void
    {
        $this->form->getState();
    }

    public function render()
    {
        return view('livewire.join');
    }
}
