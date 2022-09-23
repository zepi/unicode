<?php

/**
 * The UnifiedCanadianAboriginalSyllabicsExtendedBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The UnifiedCanadianAboriginalSyllabicsExtendedBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class UnifiedCanadianAboriginalSyllabicsExtendedBlock extends AbstractBlock
{
    protected string $key = 'UnifiedCanadianAboriginalSyllabicsExtended';
    protected array $names = [
        'en' => 'Unified Canadian Aboriginal Syllabics Extended',
        'de' => 'Vereinh. Silbenz. kanad. Ureinw., erw.',
    ];
    protected int $blockStart = 0x18B0;
    protected int $blockEnd = 0x18FF;
    protected string $regex = '/[\x{18B0}-\x{18FF}]/u';
}