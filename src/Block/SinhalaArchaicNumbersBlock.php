<?php

/**
 * The SinhalaArchaicNumbersBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The SinhalaArchaicNumbersBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class SinhalaArchaicNumbersBlock extends AbstractBlock
{
    protected string $key = 'SinhalaArchaicNumbers';
    protected array $names = [
        'en' => 'Sinhala Archaic Numbers',
        'de' => 'Singhalesische Zahlzeichen',
    ];
    protected int $blockStart = 0x111E0;
    protected int $blockEnd = 0x111FF;
    protected string $regex = '/[\x{111E0}-\x{111FF}]/u';
}