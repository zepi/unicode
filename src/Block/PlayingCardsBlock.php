<?php

/**
 * The PlayingCardsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The PlayingCardsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
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