<?php

/**
 * The PsalterPahlaviBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The PsalterPahlaviBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class PsalterPahlaviBlock extends AbstractBlock
{
    protected string $key = 'PsalterPahlavi';
    protected array $names = [
        'en' => 'Psalter Pahlavi',
        'de' => 'Psalter-Pahlavi',
    ];
    protected int $blockStart = 0x10B80;
    protected int $blockEnd = 0x10BAF;
    protected string $regex = '/[\x{10B80}-\x{10BAF}]/u';
}