<?php

/**
 * The BamumBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The BamumBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class BamumBlock extends AbstractBlock
{
    protected string $key = 'Bamum';
    protected array $names = [
        'en' => 'Bamum',
        'de' => 'Bamum',
    ];
    protected int $blockStart = 0xA6A0;
    protected int $blockEnd = 0xA6FF;
    protected string $regex = '/[\x{A6A0}-\x{A6FF}]/u';
}