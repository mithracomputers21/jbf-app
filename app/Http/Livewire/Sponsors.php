<?php

namespace App\Http\Livewire;

use App\Models\Sponsor;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Card;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;


class Sponsors extends Component implements HasForms
{
    use InteractsWithForms;

    public array $data = [];

    public $new_library_or_join_old_library;
    public $date;
    public $village_address;
    public $old_library_name;
    public $new_library_land_size;
    public $contact_person_name;
    public $contact_person_phone;
    public $ambedkariyam_50_sponsor_name;
    public $ambedkariya_thoothuvar_land_sponsor;
    public $building_materials_sponsor;
    public $table_chair_sponsor;
    public $computer_sponsor;
    public $electrical_items_sponsor;
    public $books_sponsors;

    public function mount(): void
    {
        $this->form->fill();
    }

    public function render()
    {
        return view('livewire.sponsors');
    }

    protected function getFormSchema(): array 
    {
        return [
            Radio::make('new_library_or_join_old_library')
            ->label('புதிய படிப்பகம் கட்ட அல்லது இயங்கும் படிப்பகத்தை இணைக்க?')
                ->options([
                    'புதிய படிப்பகம் கட்ட' => 'புதிய படிப்பகம் கட்ட',
                    'இயங்கும் படிப்பகத்தை இணைக்க' => 'இயங்கும் படிப்பகத்தை இணைக்க'
                ])->inline()->required(),
            DatePicker::make('date')->label('நாள்')->required(),
            TextInput::make('village_address')->label('கிராமம் / பகுதியின் பெயர்')->maxLength(255),
            TextInput::make('old_library_name')->label('பழைய படிப்பகம் எனில் அதன் பெயர்')->maxLength(255),
            TextInput::make('new_library_land_size')->label('புதிய படிப்பகம் நிலத்தின் அளவு'),
            TextInput::make('contact_person_name')->label('பொறுப்பாளர் / தொடர்பாளர் பெயர்'),
            TextInput::make('contact_person_phone')->label('பொறுப்பாளர் / தொடர்பாளர் கைபேசி எண்'),
            TextInput::make('ambedkariyam_50_sponsor_name')->label('அம்பேத்கரியம் 50 தொகுப்புக் கொடையாளர்'),
            TextInput::make('ambedkariya_thoothuvar_land_sponsor')->label('நிலம் கொடையாளர்கள்'),
            TextInput::make('building_materials_sponsor')->label('கட்டுமானப் பொருட்கள் / கொடையாளர்கள்'),
            TextInput::make('table_chair_sponsor')->label('மேசை நாற்காலி கொடையாளர்கள்'),
            TextInput::make('computer_sponsor')->label('கம்ப்யூட்டர்கள் கொடையாளர்கள்'),
            TextInput::make('electrical_items_sponsor')->label('மின்சாதன பொருட்கள் கொடையாளர்கள்'),
            TextInput::make('books_sponsors')->label('புத்தகங்கள் கொடையாளர்கள்'),
        ];
    } 

    protected function getFormStatePath(): ?string
    {
        return 'data';
    }

    protected function getFormModel(): Model|string|null
    {
        return Sponsors::class;
    }

    public function submitForm()
    {
        $sponsors = Sponsors::save();
    }

}
