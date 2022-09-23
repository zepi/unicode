<?php

/**
 * The TaiVietBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The TaiVietBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class TaiVietBlock extends AbstractBlock
{
    protected string $key = 'TaiViet';
    protected array $names = [
        'en' => 'Tai Viet',
        'de' => 'Tai Viet',
    ];
    protected int $blockStart = 0xAA80;
    protected int $blockEnd = 0xAADF;
    protected string $regex = '/[\x{AA80}-\x{AADF}]/u';
}