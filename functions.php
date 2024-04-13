<?php
include "variables.php" ; 

function headerNav($array){
    foreach($array as $elem){
        echo '<li class="' . $elem['li_class'] . '">
        <a class="' . $elem['class'] . '" href="' . $elem['href'] . '">' . $elem['content'] . '</a>
        </li>';
    }
}


function serviceSectionCards($array){
    foreach($array as $elem){
        echo '<div class="col-md-6 col-lg-3">
        <div class="service-card">
            <div class="body">
                <img src="' . $elem['img'] . '"
                    alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                    class="icon">
                <h6 class="title">' . $elem['title'] . '</h6>
                <p class="subtitle">Labore velit culpa adipisci excepturi consequuntur itaque in nam
                    molestias dolorem iste quod.</p>
            </div>
        </div>
    </div>';
    }
}

function portfolioSection($array){
    foreach($array as $elem){
        echo '<div class="col-md-4">
        <a href="#" class="portfolio-card">
            <img src="' . $elem . '" class="portfolio-card-img"
                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
            <span class="portfolio-card-overlay">
                <span class="portfolio-card-caption">
                    <h4>Web Designing</h5>
                        <p class="font-weight-normal">Category: Web Templates</p>
                </span>
            </span>
        </a>
    </div>';
    }
}

function pricing($array){
    foreach($array as $elem){
        echo '<div class="pricing-card">
        <div class="pricing-card-header">
            <img class="pricing-card-icon" src="' . $elem['img'] . '"
                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
        </div>
        <div class="pricing-card-body">
            <h6 class="pricing-card-title">Free</h6>
            <div class="pricing-card-list">
                <p>accusamus reprehenderit</p>
                <p>provident dolorem </p>
                <p>quos neque</p>
                <p>fugiat quibusdam</p>
                <p><i class="ti-close"></i></p>
                <p><i class="ti-close"></i></p>
            </div>
        </div>
        <div class="pricing-card-footer">
            <span>$</span>
            <span>0.00/Month</span>
        </div>
        <a href="#" class="btn btn-primary mt-3 pricing-card-btn">Subscribe</a>
    </div>';
    }
}