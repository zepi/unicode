<?php

/**
 * The RejangBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The RejangBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class RejangBlock extends AbstractBlock
{
    protected string $key = 'Rejang';
    protected array $names = [
        'en' => 'Rejang',
        'de' => 'Rejang',
    ];
    protected int $blockStart = 0xA930;
    protected int $blockEnd = 0xA95F;
    protected string $regex = '/[\x{A930}-\x{A95F}]/u';
}