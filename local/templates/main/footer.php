<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use \Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

?>
<footer>
    <div class="footer">
        <div class="container">
            <div class="row table table_middle">
                <div class="col-14 col-lg-24 col-lg-table-none table__cell">
                    <div class="footer__title"><? $APPLICATION->IncludeFile(SITE_DIR . 'include/footer/how_to_get_us_title.php'); ?></div>
                    <div class="footer__button">
                        <a href="" title="" class="button-cheese"><span>
                                    <svg class="svg" width="27" height="37" viewBox="0 0 27 37">
                                        <g transform="translate(-1857 -16)">
                                            <path d="M1884 29.5c0 7.46-12.82 23.5-13.5 23.5-.98 0-13.5-16.04-13.5-23.5a13.5 13.5 0 1 1 27 0zm-19 0a5.5 5.5 0 1 0 11 0 5.5 5.5 0 0 0-11 0z"></path>
                                        </g>
                                    </svg>
                                <? $APPLICATION->IncludeFile(SITE_DIR . 'include/footer/scheme_title.php'); ?></span></a>
                    </div>
                </div>
                <div class="col-10 col-lg-24 col-lg-table-none table__cell">
                    <div class="footer__phone">
                        <? $APPLICATION->IncludeFile(SITE_DIR . 'include/footer/phone.php'); ?>
                    </div>
                    <div class="footer__social nav">
                        <a href="<?=Loc::getMessage('LEMA_FOOTER_VK_URL');?>" title="<?=Loc::getMessage('LEMA_FOOTER_VK_TITLE');?>">
                            <svg class="footer__social__item" viewBox="0 0 512 512">
                                <g>
                                    <path d="M 386.78844,267.98983 C 372.66955,252.76785 353.87005,242.68578 330.3933,237.75205 v -2.04693 c 16.3385,-6.79625 29.1347,-17.43152 38.40871,-31.89745 9.269,-14.45753 13.90601,-30.962 13.90601,-49.50501 0,-15.99315 -3.36292,-30.11373 -10.07368,-42.3718 C 365.9085,99.68118 355.7443,89.90088 342.13502,82.58996 329.53832,75.78365 316.06652,71.31764 301.6861,69.18857 287.30567,67.06118 266.16922,66 238.26168,66 H 104.02146 v 380 h 152.10929 c 26.36525,0 48.1119,-2.3906 65.20144,-7.15166 17.09625,-4.75435 32.79938,-12.75428 47.08592,-23.98973 12.08708,-9.35784 21.69805,-21.18171 28.83797,-35.47663 7.13825,-14.29158 10.72246,-30.87316 10.72246,-49.7615 0,-25.85225 -7.06282,-46.40362 -21.1901,-61.63065 z M 198.97116,135.66578 h 6.62861 c 17.0141,0 29.817,0.12909 38.40368,0.38223 8.60009,0.25817 16.03338,1.74851 22.34012,4.46601 6.63532,2.90022 11.51374,7.57411 14.66207,14.03843 3.15001,6.46935 4.72753,12.76267 4.72753,18.88164 0,8.34696 -1.45345,15.65955 -4.33524,21.94951 -2.90024,6.30171 -8.17261,11.23544 -15.82718,14.80289 -6.98067,3.23551 -13.73333,5.01755 -20.28651,5.36457 -6.55317,0.34368 -17.99145,0.50293 -34.32491,0.50293 h -11.98985 v -80.38821 z m 104.75515,216.79941 c -3.99661,7.22878 -10.33687,12.72412 -19.01241,16.4525 -9.87586,4.26149 -19.57065,6.56155 -29.09278,6.89516 -9.5305,0.34032 -26.71561,0.51971 -51.54355,0.51971 h -5.10641 v -95.20118 h 17.59918 c 17.02079,0 30.58146,0.12741 40.70375,0.38557 10.12395,0.25482 18.08197,1.4937 23.86232,3.70324 9.53218,3.40483 16.66875,8.41736 21.43819,15.05269 4.76945,6.6353 7.15333,15.82214 7.15333,27.56219 0,9.18516 -2.005,17.40303 -6.00162,24.63012 z"></path>
                                </g>
                            </svg>
                        </a>
                        <a href="<?=Loc::getMessage('LEMA_FOOTER_FACEBOOK_URL');?>" title="<?=Loc::getMessage('LEMA_FOOTER_FACEBOOK_TITLE');?>">
                            <svg class="footer__social__item" viewBox="0 0 56.693 56.693">
                                <g>
                                    <path d="M40.43,21.739h-7.645v-5.014c0-1.883,1.248-2.322,2.127-2.322c0.877,0,5.395,0,5.395,0V6.125l-7.43-0.029  c-8.248,0-10.125,6.174-10.125,10.125v5.518h-4.77v8.53h4.77c0,10.947,0,24.137,0,24.137h10.033c0,0,0-13.32,0-24.137h6.77  L40.43,21.739z"></path>
                                </g>
                            </svg>
                        </a>
                        <a href="<?=Loc::getMessage('LEMA_FOOTER_TWITTER_URL');?>" title="<?=Loc::getMessage('LEMA_FOOTER_TWITTER_TITLE');?>">
                            <svg class="footer__social__item" viewBox="0 0 56.693 56.693">
                                <g>
                                    <path d="M52.837,15.065c-1.811,0.805-3.76,1.348-5.805,1.591c2.088-1.25,3.689-3.23,4.444-5.592c-1.953,1.159-4.115,2-6.418,2.454  c-1.843-1.964-4.47-3.192-7.377-3.192c-5.581,0-10.106,4.525-10.106,10.107c0,0.791,0.089,1.562,0.262,2.303  c-8.4-0.422-15.848-4.445-20.833-10.56c-0.87,1.492-1.368,3.228-1.368,5.082c0,3.506,1.784,6.6,4.496,8.412  c-1.656-0.053-3.215-0.508-4.578-1.265c-0.001,0.042-0.001,0.085-0.001,0.128c0,4.896,3.484,8.98,8.108,9.91  c-0.848,0.23-1.741,0.354-2.663,0.354c-0.652,0-1.285-0.063-1.902-0.182c1.287,4.015,5.019,6.938,9.441,7.019  c-3.459,2.711-7.816,4.327-12.552,4.327c-0.815,0-1.62-0.048-2.411-0.142c4.474,2.869,9.786,4.541,15.493,4.541  c18.591,0,28.756-15.4,28.756-28.756c0-0.438-0.009-0.875-0.028-1.309C49.769,18.873,51.483,17.092,52.837,15.065z"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="menu-site-map">
                    <? $APPLICATION->IncludeComponent('bitrix:main.map', 'sitemap', array(
                        'LEVEL' => '0',
                        'COL_NUM' => '1',
                        'SHOW_DESCRIPTION' => 'N',
                        'SET_TITLE' => 'N',
                        'CACHE_TYPE' => 'A',
                        'CACHE_TIME' => '3600',
                    )); ?>
                </div>
            </div>
        </div>
        <? if($APPLICATION->GetCurDir() == SITE_DIR . 'contacts/'): ?>
            <div class="footer__parsley-left col-xs-none col-lg-none"></div>
            <div class="footer__parsley-right col-xs-none col-lg-none"></div>
        <? endif; ?>
        <?
        $sections = array('events', 'catalog', 'exclusive', 'brands', 'recipes');

        if(preg_match('~^' . SITE_DIR . '(?:' . join($sections, '|') . ')/~iu', $APPLICATION->GetCurDir())) : ?>
            <div class="footer__parsley-left col-xs-none"></div>
            <div class="footer__parsley-right col-xs-none"></div>
        <? endif; ?>
    </div>
</footer>
</div>
</body>
</html>