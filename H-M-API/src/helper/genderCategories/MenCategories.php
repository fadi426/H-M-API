<?php
$menCategories = [
    ['', 'view-all'],
    ['Jacks & Jassen', 'jacks-jassen'],
    ['Hoodies & Sweatshirts', 'hoodies-sweatshirts'],
    ['Vesten & Truien', 'vesten-truien'],
    ['T-shirts & Singlets', 'tshirts-singlets'],
    ['Schoenen', 'schoenen'],
    ['Overhemden', 'overhemden'],
    ['Basics', 'basics'],
    ['Blazers & Pakken', 'blazers-pakken'],
    ['Shorts', 'shorts'],
    ['Broeken', 'broeken'],
    ['Jeans', 'jeans'],
    ['Swimwear', 'swimwear'],
    ['Underwear & Loungewear', 'underwear-loungewear'],
    ['Sokken', 'sokken'],
    ['Accessoires', 'accessoires'],
    ['Sportkleding', 'sportkleiding'],
    ['Grotere maten', 'grotere-maten']
];

function getMenCategory() {
    global $menCategories;
    return $menCategories;
}