<?php
namespace App\Enums;


enum WorkspaceVisibility: string
{
    case Private = 'Private';
    case Public = 'Public';

    public static function option(): array
    {
        return collect(self::cases())->map(fn($item) => [
            'value' => $item->value,
            'label' => $item->name,
        ])->values()->toArray();
    }
}
