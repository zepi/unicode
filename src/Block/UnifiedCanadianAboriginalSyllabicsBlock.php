<?php

/**
 * The UnifiedCanadianAboriginalSyllabicsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The UnifiedCanadianAboriginalSyllabicsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class UnifiedCanadianAboriginalSyllabicsBlock extends AbstractBlock
{
    protected string $key = 'UnifiedCanadianAboriginalSyllabics';
    protected array $names = [
        'en' => 'Unified Canadian Aboriginal Syllabics',
        'de' => 'Vereinh. Silbenzeichen kanad. Ureinwohner',
    ];
    protected int $blockStart = 0x1400;
    protected int $blockEnd = 0x167F;
    protected string $regex = '/[\x{1400}-\x{167F}]/u';
}