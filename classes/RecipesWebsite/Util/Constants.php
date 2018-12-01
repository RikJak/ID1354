<?php
namespace RecipesWebsite\Util;
use Id1354fw\Util\Classes;
class Constants{
    const TASTY_CONTR_KEY = 'TASTY_CONTR_KEY';
    const TASTY_FIRST_PAGE_HANDLER = 'RecipesWebsite/FirstPage';
    const TASTY_RECIPE_VIEW = 'recipe';
    const TASTY_LOGIN_VIEW = 'login';
    const TASTY_USERNAME_VAR = 'username';
    const TASTY_PASSWORD_VAR = 'password';
    const TASTY_ENTRIES_VAR = 'entries';
    const TASTY_LOGINP_VIEW = 'loginP';
    const TASTY_SIGNUPP_VIEW = 'signUp';
    const TASTY_MEATBALL_VIEW = 'meatballs';
    const TASTY_PANCAKES_VIEW = 'pancakes';
    const CHAT_ENTRY_DELIMITER = ';\n';
    const TASTY_ISLOGGEDIN = 'loggedin';
    const TASTY_RECIPE= 'reciepeNumber';
    const TASTY_CALENDAR_VIEW= 'calendar';
    const TASTY_FRONT_PAGE = 'index';
    const TASTY_LAST_PAGE = 'last';
    const TASTY_MY_PAGE = 'Mypage';
    public static function getViewFragmentsDir(){
        return $_SERVER['DOCUMENT_ROOT'] . Classes::getContextPath() . '/resourses/fragments/';
    }
}