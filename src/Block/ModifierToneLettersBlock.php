<?php

namespace zepi\Unicode\Block;

class ModifierToneLettersBlock extends AbstractBlock
{
    protected string $key = 'ModifierToneLetters';
    protected array $names = [
        'en' => 'Modifier Tone Letters',
        'de' => 'Modifizierende Tonzeichen',
    ];
    protected int $blockStart = 0xA700;
    protected int $blockEnd = 0xA71F;
    protected string $regex = '/[\x{A700}-\x{A71F}]/u';
}