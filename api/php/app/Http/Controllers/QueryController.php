<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    public function amount()
    {
        $query = DB::select('
            SELECT
                organizations.name as Organization,
                SUM(orders.amount_to_pay) AS amount,
                EXTRACT(YEAR FROM orders.created_at) AS year
            FROM
                organizations
            JOIN
                orders ON orders.organization_id = organizations.id
            GROUP BY
                organizations.id,
                year
            ORDER BY year DESC;
        ');

        return response()->json($query);
    }

    public function orders()
    {
        $query = DB::select('
            SELECT
                name as Organization,
                COUNT(orders.id) AS Count
            FROM
                organizations
            JOIN
                orders ON orders.organization_id = organizations.id
                    WHERE
                        EXTRACT(YEAR FROM orders.created_at) = 2021
            GROUP BY
                organizations.id
            HAVING
                COUNT(orders.id) > 70
        ');

        return response()->json($query);
    }

    public function sold()
    {
        $query = DB::select('
            SELECT
                organizations.name as Organization,
                (
                    SELECT
                        MAX(products.amount)
                    FROM
                        products
                    WHERE
                        products.organization_id = organizations.id
                ) AS "Count",
                (
                    SELECT
                        products.name
                    FROM
                        products
                    WHERE
                        products.amount = (
                            SELECT
                                MAX(products.amount) as "Count"
                            FROM
                                products
                            WHERE
                                products.organization_id = organizations.id
                            ORDER BY
                                "Count" DESC
                            LIMIT 1
                        )
                ) AS "Product Name"
            FROM
                organizations
            JOIN
                products ON products.organization_id = organizations.id
            GROUP BY
                organizations.id
        ');

        return response()->json($query);
    }
}
