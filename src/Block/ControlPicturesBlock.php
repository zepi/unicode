<?php

namespace zepi\Unicode\Block;

class ControlPicturesBlock extends AbstractBlock
{
    protected string $key = 'ControlPictures';
    protected array $names = [
        'en' => 'Control Pictures',
        'de' => 'Symbole für Steuerzeichen',
    ];
    protected int $blockStart = 0x2400;
    protected int $blockEnd = 0x243F;
    protected string $regex = '/[\x{2400}-\x{243F}]/u';
}