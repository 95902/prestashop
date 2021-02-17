<?php
/**
 * 2007-2020 PrestaShop.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 *  @author    PrestaShop SA <contact@prestashop.com>
 *  @copyright 2007-2020 PrestaShop SA
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */

use PrestaShop\AccountsAuth\Exception\ServiceNotFoundException;
use PrestaShop\AccountsAuth\Handler\ErrorHandler\ErrorHandler;
use PrestaShop\AccountsAuth\Service\PsAccountsService;

/**
 * @deprecated use AdminAjaxPsAccountsController::ajaxProcessGetOrRefreshToken instead
 *
 * Class AdminGetOrRefreshTokenController
 */
class AdminGetOrRefreshTokenController extends ModuleAdminController
{
    /**
     * @var PsAccountsService
     */
    private $psAccountsService;

    /**
     * @var ErrorHandler
     */
    private $errorHandler;

    /**
     * GetOrRefreshToken constructor.
     *
     * @throws ServiceNotFoundException
     * @throws PrestaShopException
     */
    public function __construct()
    {
        parent::__construct();

        $this->psAccountsService = new PsAccountsService();

        $this->errorHandler = ErrorHandler::getInstance();
    }

    /**
     * @return void
     *
     * @throws Exception
     */
    public function initContent()
    {
        try {
            $this->ajaxDie(
                json_encode([
                    'token' => $this->psAccountsService->getOrRefreshToken(),
                    'refreshToken' => $this->psAccountsService->getFirebaseRefreshToken(),
                ])
            );
        } catch (Exception $e) {
            $this->errorHandler->handle($e, $e->getCode());
        }
    }
}
