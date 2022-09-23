<?php

/**
 * The CombiningDiacriticalMarksBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The CombiningDiacriticalMarksBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class CombiningDiacriticalMarksBlock extends AbstractBlock
{
    protected string $key = 'CombiningDiacriticalMarks';
    protected array $names = [
        'en' => 'Combining Diacritical Marks',
        'de' => 'Kombinierende diakritische Zeichen',
    ];
    protected int $blockStart = 0x0300;
    protected int $blockEnd = 0x036F;
    protected string $regex = '/[\x{0300}-\x{036F}]/u';
}