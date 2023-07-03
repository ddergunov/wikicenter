<?php

namespace App\Filament\Fabricator\PageBlocks;

use Awcodes\Curator\Components\Forms\CuratorPicker;
use Awcodes\Curator\Models\Media;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class ImageCuratorBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('image-curator')
            ->schema([
                CuratorPicker::make('image')
            ]);
    }

    public static function mutateData(array $data): array
    {
        $media = Media::query()->find($data['image']);

        $data = [
            'image' => $media
        ];

        return $data;
    }
}
