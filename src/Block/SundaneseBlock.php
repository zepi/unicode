<?php

/**
 * The SundaneseBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The SundaneseBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class SundaneseBlock extends AbstractBlock
{
    protected string $key = 'Sundanese';
    protected array $names = [
        'en' => 'Sundanese',
        'de' => 'Sundanesisch',
    ];
    protected int $blockStart = 0x1B80;
    protected int $blockEnd = 0x1BBF;
    protected string $regex = '/[\x{1B80}-\x{1BBF}]/u';
}