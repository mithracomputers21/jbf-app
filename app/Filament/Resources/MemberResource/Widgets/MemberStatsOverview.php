<?php

namespace App\Filament\Resources\MemberResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\Member;
use App\Models\MemberLibrary;
use App\Models\MemberPayment;

class MemberStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Members', Member::all()->count())
            ->color('success'),
            Card::make('Total Amount', MemberPayment::all()->sum('amount')),
            Card::make('Total Libraries', MemberLibrary::all()->count()),
            Card::make('Jaibhim Diamond', Member::where('plan_id', '=', 1)->count()),
            Card::make('Jaibhim Gold', Member::where('plan_id', '=', 2)->count()),
            Card::make('Jaibhim Silver', Member::where('plan_id', '=', 3)->count()),
            Card::make('Ambedkariya Thoothuvar', Member::where('plan_id', '=', 4)->count()),
            Card::make('Existing Libraries', MemberLibrary::where('library_available', '=', 1)->count()),
        ];
    }
}
