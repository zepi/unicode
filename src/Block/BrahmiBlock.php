<?php

/**
 * The BrahmiBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The BrahmiBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class BrahmiBlock extends AbstractBlock
{
    protected string $key = 'Brahmi';
    protected array $names = [
        'en' => 'Brahmi',
        'de' => 'Brahmi',
    ];
    protected int $blockStart = 0x11000;
    protected int $blockEnd = 0x1107F;
    protected string $regex = '/[\x{11000}-\x{1107F}]/u';
}