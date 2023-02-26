<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SponsorResource\Pages;
use App\Filament\Resources\SponsorResource\RelationManagers;
use App\Models\Sponsor;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Card;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SponsorResource extends Resource
{
    protected static ?string $model = Sponsor::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
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
                ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable()->searchable(),
                TextColumn::make('new_library_or_join_old_library')->sortable()->searchable(),
                TextColumn::make('new_library_or_join_old_library')->sortable()->searchable(),
                TextColumn::make('village_address')->sortable()->searchable(),
                TextColumn::make('old_library_name')->sortable()->searchable(),
                TextColumn::make('new_library_land_size')->sortable()->searchable(),
                TextColumn::make('contact_person_name')->sortable()->searchable(),
                TextColumn::make('contact_person_phone')->sortable()->searchable(),
                TextColumn::make('ambedkariyam_50_sponsor_name')->sortable()->searchable(),
                TextColumn::make('ambedkariya_thoothuvar_land_sponsor')->sortable()->searchable(),
                TextColumn::make('building_materials_sponsor')->sortable()->searchable(),
                TextColumn::make('table_chair_sponsor')->sortable()->searchable(),
                TextColumn::make('computer_sponsor')->sortable()->searchable(),
                TextColumn::make('electrical_items_sponsor')->sortable()->searchable(),
                TextColumn::make('books_sponsors')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSponsors::route('/'),
            'create' => Pages\CreateSponsor::route('/create'),
            'edit' => Pages\EditSponsor::route('/{record}/edit'),
        ];
    }    
}
