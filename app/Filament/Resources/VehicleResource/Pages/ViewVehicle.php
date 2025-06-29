<?php

namespace App\Filament\Resources\VehicleResource\Pages;

use Filament\Actions;
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Filament\Forms\Components\Repeater;
use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\VehicleResource;
use Joaopaulolndev\FilamentPdfViewer\Infolists\Components\PdfViewerEntry;

class ViewVehicle extends ViewRecord
{
    protected static string $resource = VehicleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Infolists\Components\Card::make('Datos del Vehiculo')
                    ->icon('heroicon-o-tag')
                    ->columns(5)
                    ->schema([
                        Infolists\Components\TextEntry::make('placa')
                            ->label('Placa'),
                        Infolists\Components\TextEntry::make('modelo')
                            ->label('Modelo'),
                        Infolists\Components\TextEntry::make('marca')
                            ->label('Marca'),
                        Infolists\Components\TextEntry::make('year')
                            ->label('Año')
                            ->badge(),
                        Infolists\Components\TextEntry::make('status')
                            ->label('Estado')
                            ->badge(),

                    ]),
                Infolists\Components\Card::make('Documentos del Vehiculo')
                    ->icon('bi-file-pdf-fill')
                    ->columns(5)
                    ->schema([
                        Infolists\Components\TextEntry::make('type'),
                    ])
            ]);
    }
}
