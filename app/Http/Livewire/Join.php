<?php

namespace App\Http\Livewire;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use App\Models\Plan;
use App\Models\Type;
use App\Models\Event;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;

class Join extends Component implements HasForms
{
    use InteractsWithForms;

    public $name = '';
    public $address = '';
    public $phone_number = '';
    public $email = '';
    public $plan_id = [];
    public $type_id = [];
    public $event_id = [];
    public $notes = '';

    public function mount(): void
    {
        $this->form->fill();
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('name')->maxLength(255)->required(),
            TextInput::make('address')->maxLength(255)->required(),
            TextInput::make('phone_number')->required()->length(10),
            TextInput::make('email')->email()->required(),
            Select::make('plan_id')
                ->relationship('plan', 'plan_name')->required(),
            Select::make('type_id')
                ->relationship('type', 'plan_type')->required(),
            Select::make('event_id')
                ->relationship('event', 'event_name'),
            TextInput::make('notes')
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
