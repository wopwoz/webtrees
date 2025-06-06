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

namespace Fisharebest\Webtrees\Census;

use Fisharebest\Webtrees\TestCase;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(CensusOfWales1881::class)]
#[CoversClass(AbstractCensusColumn::class)]
class CensusOfWales1881Test extends TestCase
{
    public function testPlaceAndDate(): void
    {
        $census = new CensusOfWales1881();

        self::assertSame('Wales', $census->censusPlace());
        self::assertSame('03 APR 1881', $census->censusDate());
    }

    public function testColumns(): void
    {
        $census  = new CensusOfWales1881();
        $columns = $census->columns();

        self::assertCount(8, $columns);
        self::assertInstanceOf(CensusColumnFullName::class, $columns[0]);
        self::assertInstanceOf(CensusColumnRelationToHeadEnglish::class, $columns[1]);
        self::assertInstanceOf(CensusColumnConditionEnglish::class, $columns[2]);
        self::assertInstanceOf(CensusColumnAgeMale::class, $columns[3]);
        self::assertInstanceOf(CensusColumnAgeFemale::class, $columns[4]);
        self::assertInstanceOf(CensusColumnOccupation::class, $columns[5]);
        self::assertInstanceOf(CensusColumnBirthPlace::class, $columns[6]);
        self::assertInstanceOf(CensusColumnNull::class, $columns[7]);

        self::assertSame('Name', $columns[0]->abbreviation());
        self::assertSame('Relation', $columns[1]->abbreviation());
        self::assertSame('Condition', $columns[2]->abbreviation());
        self::assertSame('AgeM', $columns[3]->abbreviation());
        self::assertSame('AgeF', $columns[4]->abbreviation());
        self::assertSame('Occupation', $columns[5]->abbreviation());
        self::assertSame('Birthplace', $columns[6]->abbreviation());
        self::assertSame('Infirm', $columns[7]->abbreviation());

        self::assertSame('Name and surname', $columns[0]->title());
        self::assertSame('Relation to head of household', $columns[1]->title());
        self::assertSame('Condition', $columns[2]->title());
        self::assertSame('Age (males)', $columns[3]->title());
        self::assertSame('Age (females)', $columns[4]->title());
        self::assertSame('Rank, profession or occupation', $columns[5]->title());
        self::assertSame('Where born', $columns[6]->title());
        self::assertSame('Whether deaf-and-dumb, blind, imbecile, idiot or lunatic', $columns[7]->title());
    }
}
