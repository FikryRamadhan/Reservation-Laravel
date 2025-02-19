<?php

namespace App\Filament\Resources\BookingResource\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use App\Models\Booking;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Contracts\Pagination\CursorPaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\Relation;

class LatestBookings extends BaseWidget
{

    public static bool $isLazy = false;

    public function getTableRecords(): Collection|Paginator|CursorPaginator
    {
        return Booking::latest()->take(5)->get();
    }

    protected function getTableQuery(): Builder|Relation|null
    {
        return Booking::query();
    }

    protected function isTablePaginationEnabled(): bool
    {
        return false;
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('id')
                ->label('ID'),
            Tables\Columns\TextColumn::make('user.name')
                ->label('User Name'),
            Tables\Columns\TextColumn::make('created_at')
                ->label('Booking Date')
                ->date('l, d F Y'),
            Tables\Columns\TextColumn::make('status')
                ->label('Status')
                ->alignCenter()
                ->badge(true)
                ->colors([
                    'warning' => 'pending',
                    'success' => 'confirmed',
                    'danger' => 'cancelled',
                ]),
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->query($this->getTableQuery())
            ->columns($this->getTableColumns());
    }
}
