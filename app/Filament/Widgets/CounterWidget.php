<?php

namespace App\Filament\Widgets;

use App\Models\Booking;
use App\Models\Hotel;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CounterWidget extends BaseWidget
{
    public static bool $isLazy = false;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Users', $this->getTotalUsers())
                ->icon('heroicon-o-user-group')
                ->description('Total number of users.'),
            Stat::make('Total Hotel', $this->getTotalHotels())
                ->icon('heroicon-o-building-office-2')
                ->description('Total number of hotels signed.'),
            Stat::make('Total Bookings', $this->getTotalBookings())
                ->icon('heroicon-o-book-open')
                ->description('Total number of bookings made.'),
        ];
    }

    protected function getTotalUsers(): int
    {
        return User::count();
    }

    protected function getTotalHotels(): int
    {
        return Hotel::count();
    }

    protected function getTotalBookings(): int
    {
        return Booking::count();
    }
}
