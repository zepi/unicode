<?php

/**
 * The EnclosedAlphanumericsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The EnclosedAlphanumericsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class EnclosedAlphanumericsBlock extends AbstractBlock
{
    protected string $key = 'EnclosedAlphanumerics';
    protected array $names = [
        'en' => 'Enclosed Alphanumerics',
        'de' => 'Umschlossene alphanumerische Zeichen',
    ];
    protected int $blockStart = 0x2460;
    protected int $blockEnd = 0x24FF;
    protected string $regex = '/[\x{2460}-\x{24FF}]/u';
}