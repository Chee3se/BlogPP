<?php

function component($component, $attributes = [])
{
    extract($attributes);
    require "views/components/{$component}.php";
}