<?php

/**
 * webtrees: online genealogy
 * Copyright (C) 2025 webtrees development team
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace Fisharebest\Webtrees\Module;

use Fisharebest\Localization\Locale\LocaleInterface;
use Fisharebest\Localization\Locale\LocaleNb;
use Fisharebest\Webtrees\Encodings\UTF8;

use function mb_substr;
use function str_starts_with;

class LanguageNorwegianBokmal extends AbstractModule implements ModuleLanguageInterface
{
    use ModuleLanguageTrait;

    /**
     * @return array<int,string>
     */
    public function alphabet(): array
    {
        return [
            'A',
            'B',
            'C',
            'D',
            'E',
            'F',
            'G',
            'H',
            'I',
            'J',
            'K',
            'L',
            'M',
            'N',
            'O',
            'P',
            'Q',
            'R',
            'S',
            'T',
            'U',
            'V',
            'W',
            'X',
            'Y',
            'Z',
            UTF8::LATIN_CAPITAL_LETTER_AE,
            UTF8::LATIN_CAPITAL_LETTER_O_WITH_STROKE,
            UTF8::LATIN_CAPITAL_LETTER_A_WITH_RING_ABOVE,
        ];
    }

    public function initialLetter(string $string): string
    {
        if (str_starts_with($string, 'AA')) {
            return 'Å';
        }

        return mb_substr($string, 0, 1);
    }

    public function isEnabledByDefault(): bool
    {
        return false;
    }

    public function locale(): LocaleInterface
    {
        return new LocaleNb();
    }

    /**
     * Letters with diacritics that are considered distinct letters in this language.
     *
     * @return array<string,string>
     */
    protected function normalizeExceptions(): array
    {
        return [
            'O' . UTF8::COMBINING_LONG_SOLIDUS_OVERLAY => UTF8::LATIN_CAPITAL_LETTER_O_WITH_STROKE,
            'A' . UTF8::COMBINING_RING_ABOVE           => UTF8::LATIN_CAPITAL_LETTER_A_WITH_RING_ABOVE,
            'AA'                                       => UTF8::LATIN_CAPITAL_LETTER_A_WITH_RING_ABOVE,
            'Aa'                                       => UTF8::LATIN_CAPITAL_LETTER_A_WITH_RING_ABOVE,
            'o' . UTF8::COMBINING_LONG_SOLIDUS_OVERLAY => UTF8::LATIN_SMALL_LETTER_O_WITH_STROKE,
            'a' . UTF8::COMBINING_RING_ABOVE           => UTF8::LATIN_SMALL_LETTER_A_WITH_RING_ABOVE,
            'aa'                                       => UTF8::LATIN_SMALL_LETTER_A_WITH_RING_ABOVE,
            'aA'                                       => UTF8::LATIN_SMALL_LETTER_A_WITH_RING_ABOVE,
        ];
    }
}
