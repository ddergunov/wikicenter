<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class ContentBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('content')
            ->schema([
                \FilamentTiptapEditor\TiptapEditor::make('content')
                    ->profile('default')
                    ->required(), //->etc
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
