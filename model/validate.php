<?php

//Validate data for the php file


//return true if food contains atleast 3 chars
function validateFood($food) {

    return strlen(trim($food)) >= 3;


}

function validMeal($meal)
{
    return in_array($meal, getMeals());
}