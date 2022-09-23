<?php

/**
 * The KharoshthiBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The KharoshthiBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class KharoshthiBlock extends AbstractBlock
{
    protected string $key = 'Kharoshthi';
    protected array $names = [
        'en' => 'Kharoshthi',
        'de' => 'Kharoshthi',
    ];
    protected int $blockStart = 0x10A00;
    protected int $blockEnd = 0x10A5F;
    protected string $regex = '/[\x{10A00}-\x{10A5F}]/u';
}