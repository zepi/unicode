<?php

/**
 * The PhoneticExtensionsSupplementBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The PhoneticExtensionsSupplementBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class PhoneticExtensionsSupplementBlock extends AbstractBlock
{
    protected string $key = 'PhoneticExtensionsSupplement';
    protected array $names = [
        'en' => 'Phonetic Extensions Supplement',
        'de' => 'Phonetische Erweiterungen, Ergänzung',
    ];
    protected int $blockStart = 0x1D80;
    protected int $blockEnd = 0x1DBF;
    protected string $regex = '/[\x{1D80}-\x{1DBF}]/u';
}