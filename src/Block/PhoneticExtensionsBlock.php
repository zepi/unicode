<?php

/**
 * The PhoneticExtensionsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The PhoneticExtensionsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class PhoneticExtensionsBlock extends AbstractBlock
{
    protected string $key = 'PhoneticExtensions';
    protected array $names = [
        'en' => 'Phonetic Extensions',
        'de' => 'Phonetische Erweiterungen',
    ];
    protected int $blockStart = 0x1D00;
    protected int $blockEnd = 0x1D7F;
    protected string $regex = '/[\x{1D00}-\x{1D7F}]/u';
}