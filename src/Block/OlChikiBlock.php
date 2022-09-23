<?php

/**
 * The OlChikiBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The OlChikiBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class OlChikiBlock extends AbstractBlock
{
    protected string $key = 'OlChiki';
    protected array $names = [
        'en' => 'Ol Chiki',
        'de' => 'Ol Chiki',
    ];
    protected int $blockStart = 0x1C50;
    protected int $blockEnd = 0x1C7F;
    protected string $regex = '/[\x{1C50}-\x{1C7F}]/u';
}