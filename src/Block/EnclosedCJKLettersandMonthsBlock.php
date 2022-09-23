<?php

/**
 * The EnclosedCJKLettersandMonthsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The EnclosedCJKLettersandMonthsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class EnclosedCJKLettersandMonthsBlock extends AbstractBlock
{
    protected string $key = 'EnclosedCJKLettersandMonths';
    protected array $names = [
        'en' => 'Enclosed CJK Letters and Months',
        'de' => 'Umschlossene CJK-Zeichen und -Monate',
    ];
    protected int $blockStart = 0x3200;
    protected int $blockEnd = 0x32FF;
    protected string $regex = '/[\x{3200}-\x{32FF}]/u';
}