<?php


namespace Tests\Functional;

use Tests\Support\FunctionalTester;

class AdminCanLoginCest
{
    public function _before(FunctionalTester $I)
    {
    }

    // tests
    public function tryLogin(FunctionalTester $I)
    {
        $I->amOnPage('/');
        $I->click('Login');
        $I->fillField('//*[@id="email"]','kirl@gmail.com');
        $I->fillField('//*[@id="password"]','kirly');
        $I->click('//*[@id="app"]/div/div[2]/form/div[5]/button');
        $I->see('These credentials do not match our records.');
        // $I->seeEmailIsSent(); // only for Symfony
    }
}
