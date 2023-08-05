<?php

// Eager return (Early return)
function validateInput($input): string
{
    // Bad
    if (!empty($input)) {
        if (strlen($input) > 10) {
            return 'Input should not exceed 10 characters.';
        } else {
            return 'Input is valid.';
        }
    } else {
        return 'Input cannot be empty.';
    }

    // Good
    if (empty($input)) {
        return 'Input cannot be empty.';
    }

    if (strlen($input) > 10) {
        return 'Input should not exceed 10 characters.';
    }

    return 'Input is valid. ';
}


