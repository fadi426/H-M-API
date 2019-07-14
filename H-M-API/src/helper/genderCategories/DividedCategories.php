<?php
$dividedCategories = [
    ['', 'view-all'],
    ['Jurken & Jumpsuits', 'dresses-and-jumpsuits'],
    ['Tops', 'tops'],
    ['Shirts & blouses', 'shirts-and-blouses'],
    ['Rokken', 'rokken'],
    ['Korte broeken', 'korte-broek'],
    ['Jeans', 'jeans'],
    ['Broeken', 'broeken'],
    ['Basics', 'basics'],
    ['Hoodies & Sweatshirts', 'hoodies-sweatshirts'],
    ['Jassen & Blazers', 'jackets-and-blazers'],
    ['Badmode', 'badmode'],
    ['Ondergoed', 'ondergoed-nachtkleding'],
    ['Accessoires', 'accessories'],
    ['Schoenen', 'shoes']
];

function getDividedCategory() {
    global $dividedCategories;
    return $dividedCategories;
}