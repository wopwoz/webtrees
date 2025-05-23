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

use Fisharebest\ExtCalendar\ArabicCalendar;
use Fisharebest\ExtCalendar\CalendarInterface;
use Fisharebest\Localization\Locale\LocaleFa;
use Fisharebest\Localization\Locale\LocaleInterface;
use Fisharebest\Webtrees\Encodings\UTF8;

class LanguageFarsi extends AbstractModule implements ModuleLanguageInterface
{
    use ModuleLanguageTrait;

    /**
     * @return array<int,string>
     */
    public function alphabet(): array
    {
        return [
            UTF8::ARABIC_LETTER_ALEF,
            UTF8::ARABIC_LETTER_BEH,
            UTF8::ARABIC_LETTER_TEH,
            UTF8::ARABIC_LETTER_THEH,
            UTF8::ARABIC_LETTER_JEEM,
            UTF8::ARABIC_LETTER_HAH,
            UTF8::ARABIC_LETTER_KHAH,
            UTF8::ARABIC_LETTER_DAL,
            UTF8::ARABIC_LETTER_THAL,
            UTF8::ARABIC_LETTER_REH,
            UTF8::ARABIC_LETTER_ZAIN,
            UTF8::ARABIC_LETTER_SEEN,
            UTF8::ARABIC_LETTER_SHEEN,
            UTF8::ARABIC_LETTER_SAD,
            UTF8::ARABIC_LETTER_DAD,
            UTF8::ARABIC_LETTER_TAH,
            UTF8::ARABIC_LETTER_ZAH,
            UTF8::ARABIC_LETTER_AIN,
            UTF8::ARABIC_LETTER_GHAIN,
            UTF8::ARABIC_LETTER_FEH,
            UTF8::ARABIC_LETTER_QAF,
            UTF8::ARABIC_LETTER_KAF,
            UTF8::ARABIC_LETTER_LAM,
            UTF8::ARABIC_LETTER_MEEM,
            UTF8::ARABIC_LETTER_NOON,
            UTF8::ARABIC_LETTER_HEH,
            UTF8::ARABIC_LETTER_WAW,
            UTF8::ARABIC_LETTER_YEH,
            UTF8::ARABIC_LETTER_HAMZA,
            UTF8::ARABIC_LETTER_TEH_MARBUTA,
            UTF8::ARABIC_LETTER_ALEF_MAKSURA,
            UTF8::ARABIC_LETTER_WAW,
        ];
    }

    public function calendar(): CalendarInterface
    {
        return new ArabicCalendar();
    }

    public function isEnabledByDefault(): bool
    {
        return false;
    }

    public function locale(): LocaleInterface
    {
        return new LocaleFa();
    }
}
