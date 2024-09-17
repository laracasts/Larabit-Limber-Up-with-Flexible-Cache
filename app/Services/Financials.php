<?php

namespace App\Services;

use Random\Randomizer;

class Financials {
    public static function get() {
        sleep(3);

        $randomizer = new Randomizer();

        $revenue = $randomizer->getFloat(1000, 5000);
        $expenses = $randomizer->getFloat(500, 4000);

        return [
            'revenue' => $revenue,
            'expenses' => $expenses,
            'profit' => $revenue - $expenses
        ];
    }
}
