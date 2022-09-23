<?php

/**
 * The CombiningDiacriticalMarksExtendedBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The CombiningDiacriticalMarksExtendedBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class CombiningDiacriticalMarksExtendedBlock extends AbstractBlock
{
    protected string $key = 'CombiningDiacriticalMarksExtended';
    protected array $names = [
        'en' => 'Combining Diacritical Marks Extended',
        'de' => 'Komb. diakr. Zeichen, erweitert',
    ];
    protected int $blockStart = 0x1AB0;
    protected int $blockEnd = 0x1AFF;
    protected string $regex = '/[\x{1AB0}-\x{1AFF}]/u';
}