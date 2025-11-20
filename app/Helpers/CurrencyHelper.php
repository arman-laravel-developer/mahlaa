<?php

if (!function_exists('formatPrice')) {
    /**
     * Format price with currency symbol
     *
     * @param float $amount
     * @return string
     */
    function formatPrice($amount)
    {
        // Get currency symbol from view shared variables or use default
        $currencySymbol = app('view')->shared('currency_symbol', '$');
        // Convert string to float if needed
        $amount = is_string($amount) ? floatval($amount) : $amount;
        return $currencySymbol . number_format($amount, 2);
    }
}

if (!function_exists('getCurrencyCode')) {
    /**
     * Get currency code
     *
     * @return string
     */
    function getCurrencyCode()
    {
        return app('view')->shared('currency_code', 'USD');
    }
}

if (!function_exists('getCurrencySymbol')) {
    /**
     * Get currency symbol
     *
     * @return string
     */
    function getCurrencySymbol()
    {
        return app('view')->shared('currency_symbol', '$');
    }
}