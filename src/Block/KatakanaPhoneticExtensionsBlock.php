<?php

/**
 * The KatakanaPhoneticExtensionsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The KatakanaPhoneticExtensionsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class KatakanaPhoneticExtensionsBlock extends AbstractBlock
{
    protected string $key = 'KatakanaPhoneticExtensions';
    protected array $names = [
        'en' => 'Katakana Phonetic Extensions',
        'de' => 'Katakana, Phonetische Erweiterungen',
    ];
    protected int $blockStart = 0x31F0;
    protected int $blockEnd = 0x31FF;
    protected string $regex = '/[\x{31F0}-\x{31FF}]/u';
}