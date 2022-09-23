<?php

/**
 * The OpticalCharacterRecognitionBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The OpticalCharacterRecognitionBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class OpticalCharacterRecognitionBlock extends AbstractBlock
{
    protected string $key = 'OpticalCharacterRecognition';
    protected array $names = [
        'en' => 'Optical Character Recognition',
        'de' => 'Optische Zeichenerkennung',
    ];
    protected int $blockStart = 0x2440;
    protected int $blockEnd = 0x245F;
    protected string $regex = '/[\x{2440}-\x{245F}]/u';
}