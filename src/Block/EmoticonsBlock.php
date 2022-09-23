<?php

/**
 * The EmoticonsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The EmoticonsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class EmoticonsBlock extends AbstractBlock
{
    protected string $key = 'Emoticons';
    protected array $names = [
        'en' => 'Emoticons',
        'de' => 'Smileys',
    ];
    protected int $blockStart = 0x1F600;
    protected int $blockEnd = 0x1F64F;
    protected string $regex = '/[\x{1F600}-\x{1F64F}]/u';
}