<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class SigninCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function signInSuccessfully(AcceptanceTester $I)
    {
        $I->amOnPage('/login');
        $I->fillField('//*[@id="email"]','kirl@gmail.com');
        $I->fillField('//*[@id="password"]','kirly');
        $I->click('//*[@id="app"]/div/div[2]/form/div[4]/button');
        $I->see('These credentials do not match our records.');
    }

    public function registerSuccessfully(AcceptanceTester $I)
    {
        $I->amOnPage('/register');
        $I->fillField('//*[@id="email"]','kirl@gmail.com');
        $I->fillField('//*[@id="password"]','kirly');
        $I->click('//*[@id="app"]/div/div[2]/form/div[5]/button');
        // $I->see('These credentials do not match our records.');
    }
}
