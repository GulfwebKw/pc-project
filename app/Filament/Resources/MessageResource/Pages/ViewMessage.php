<?php

namespace App\Filament\Resources\MessageResource\Pages;

use App\Filament\Resources\MessageResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMessage extends ViewRecord
{
    protected static string $resource = MessageResource::class;

    protected function getHeaderActions(): array
    {
        $action = [];
        if ( $this->record?->attachment ) {
            $action[] =
                Actions\Action::make('download_attachment')
                ->url(asset('storage/' . $this->record?->attachment));
        }
        return $action;
    }


    public function mount(int | string $record): void
    {
        parent::mount($record);
        $this->record->is_read = true;
        $this->record->save();
    }
}
