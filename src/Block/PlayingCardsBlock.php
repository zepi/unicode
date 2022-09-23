<?php

namespace zepi\Unicode\Block;

class PlayingCardsBlock extends AbstractBlock
{
    protected string $key = 'PlayingCards';
    protected array $names = [
        'en' => 'Playing Cards',
        'de' => 'Spielkarten',
    ];
    protected int $blockStart = 0x1F0A0;
    protected int $blockEnd = 0x1F0FF;
    protected string $regex = '/[\x{1F0A0}-\x{1F0FF}]/u';
}