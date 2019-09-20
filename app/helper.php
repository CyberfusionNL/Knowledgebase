<?php

function selected($value, $key) {
    return ($value == $key) ? 'selected' : '';
}

function hasTwofactor(\App\User $user) {
    return $user->twofactor_secret !== '';
}
