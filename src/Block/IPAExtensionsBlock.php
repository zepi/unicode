<?php

/**
 * The IPAExtensionsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The IPAExtensionsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class IPAExtensionsBlock extends AbstractBlock
{
    protected string $key = 'IPAExtensions';
    protected array $names = [
        'en' => 'IPA Extensions',
        'de' => 'IPA-Erweiterungen',
    ];
    protected int $blockStart = 0x0250;
    protected int $blockEnd = 0x02AF;
    protected string $regex = '/[\x{0250}-\x{02AF}]/u';
}