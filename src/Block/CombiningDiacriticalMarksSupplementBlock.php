<?php

/**
 * The CombiningDiacriticalMarksSupplementBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The CombiningDiacriticalMarksSupplementBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class CombiningDiacriticalMarksSupplementBlock extends AbstractBlock
{
    protected string $key = 'CombiningDiacriticalMarksSupplement';
    protected array $names = [
        'en' => 'Combining Diacritical Marks Supplement',
        'de' => 'Komb. diakr. Zeichen, Ergänzung',
    ];
    protected int $blockStart = 0x1DC0;
    protected int $blockEnd = 0x1DFF;
    protected string $regex = '/[\x{1DC0}-\x{1DFF}]/u';
}