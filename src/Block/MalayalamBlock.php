<?php

/**
 * The MalayalamBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The MalayalamBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class MalayalamBlock extends AbstractBlock
{
    protected string $key = 'Malayalam';
    protected array $names = [
        'en' => 'Malayalam',
        'de' => 'Malayalam',
    ];
    protected int $blockStart = 0x0D00;
    protected int $blockEnd = 0x0D7F;
    protected string $regex = '/[\x{0D00}-\x{0D7F}]/u';
}