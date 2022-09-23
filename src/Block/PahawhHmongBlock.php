<?php

/**
 * The PahawhHmongBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The PahawhHmongBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class PahawhHmongBlock extends AbstractBlock
{
    protected string $key = 'PahawhHmong';
    protected array $names = [
        'en' => 'Pahawh Hmong',
        'de' => 'Pahawh Hmong',
    ];
    protected int $blockStart = 0x16B00;
    protected int $blockEnd = 0x16B8F;
    protected string $regex = '/[\x{16B00}-\x{16B8F}]/u';
}