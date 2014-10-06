<?php
$I = new FunctionalTester($scenario);
$I->am('Lenyn, el desarrollador');
$I->wantTo('revisar si el Index está funcionando correctamente, en modo en construcción');
$I->amOnPage('/');
$I->see('Preséntate en La Web', 'h1');

