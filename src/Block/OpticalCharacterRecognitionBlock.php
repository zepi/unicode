<?php

namespace zepi\Unicode\Block;

class OpticalCharacterRecognitionBlock extends AbstractBlock
{
    protected string $key = 'OpticalCharacterRecognition';
    protected array $names = [
        'en' => 'Optical Character Recognition',
        'de' => 'Optische Zeichenerkennung',
    ];
    protected int $blockStart = 0x2440;
    protected int $blockEnd = 0x245F;
    protected string $regex = '/[\x{2440}-\x{245F}]/u';
}