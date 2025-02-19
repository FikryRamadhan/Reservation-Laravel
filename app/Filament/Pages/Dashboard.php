<?php
 
namespace App\Filament\Pages;

class Dashboard extends \Filament\Pages\Dashboard
{
 
    public function getColumns(): int|string|array
    {
        return 1;
    }

    public function getWidgets(): array
    {
        return [
            \Filament\Widgets\AccountWidget::class,
            \App\Filament\Widgets\CounterWidget::class,
            \App\Filament\Resources\BookingResource\Widgets\LatestBookings::class,
        ];
    }

}