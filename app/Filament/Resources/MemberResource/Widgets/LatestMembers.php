<?php

namespace App\Filament\Resources\MemberResource\Widgets;

use Closure;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class LatestMembers extends BaseWidget
{
    protected function getTableQuery(): Builder
    {
        // ...
    }

    protected function getTableColumns(): array
    {
        return [
            // ...
        ];
    }
}
