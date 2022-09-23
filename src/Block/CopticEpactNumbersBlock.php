<?php

/**
 * The CopticEpactNumbersBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The CopticEpactNumbersBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class CopticEpactNumbersBlock extends AbstractBlock
{
    protected string $key = 'CopticEpactNumbers';
    protected array $names = [
        'en' => 'Coptic Epact Numbers',
        'de' => 'Koptische Zahlzeichen',
    ];
    protected int $blockStart = 0x102E0;
    protected int $blockEnd = 0x102FF;
    protected string $regex = '/[\x{102E0}-\x{102FF}]/u';
}