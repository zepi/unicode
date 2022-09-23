<?php

/**
 * The SamaritanBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The SamaritanBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class SamaritanBlock extends AbstractBlock
{
    protected string $key = 'Samaritan';
    protected array $names = [
        'en' => 'Samaritan',
        'de' => 'Samaritanisch',
    ];
    protected int $blockStart = 0x0800;
    protected int $blockEnd = 0x083F;
    protected string $regex = '/[\x{0800}-\x{083F}]/u';
}