<?php

class Form
{
    /**
     * Validate full name (letters + spaces only)
     */
    public static function validName(string $name): bool
    {
        return preg_match("/^[a-zA-ZàâäæçèéêëîïœùüûÀÂÄÆÇÈÉÊËÎÏŒÙÜÛ \-]+$/", trim($name));
    }

    /**
     * Validate email format
     */
    public static function validEmail(string $email): bool
    {
        return filter_var(trim($email), FILTER_VALIDATE_EMAIL);
    }

    /**
     * Validate phone number (8–10 digits, optional +)
     */
    public static function validPhone(string $phone): bool
    {
        return preg_match("/^\+?[0-9]{8,10}$/", trim($phone));
    }

    /**
     * Validate password
     * Must contain at least:
     * - 1 uppercase
     * - 1 lowercase
     * - 1 digit
     * - Minimum length (default 6)
     */
    public static function validPassword(string $password, int $min = 6): bool
    {
        if (strlen($password) < $min) return false;

        $hasUpper = preg_match("/[A-Z]/", $password);
        $hasLower = preg_match("/[a-z]/", $password);
        $hasNumber = preg_match("/[0-9]/", $password);

        return $hasUpper && $hasLower && $hasNumber;
    }
}
