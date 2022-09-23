<?php

/**
 * The KanaSupplementBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The KanaSupplementBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class KanaSupplementBlock extends AbstractBlock
{
    protected string $key = 'KanaSupplement';
    protected array $names = [
        'en' => 'Kana Supplement',
        'de' => 'Kana, Ergänzung',
    ];
    protected int $blockStart = 0x1B000;
    protected int $blockEnd = 0x1B0FF;
    protected string $regex = '/[\x{1B000}-\x{1B0FF}]/u';
}