<?php

declare (strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Renaming\Rector\Name\RenameClassRector;

return static function (RectorConfig $rectorConfig) : void {

    $rectorConfig->ruleWithConfiguration(RenameClassRector::class, [
        // ********************************************************************
        // extensions/admin-module
        'Crm\AdminModule\Components\AdminMenuFactoryInterface'
            => 'Crm\AdminModule\Components\AdminMenu\AdminMenuFactoryInterface',
        'Crm\AdminModule\Components\AdminMenu'
            => 'Crm\AdminModule\Components\AdminMenu\AdminMenu',

        'Crm\AdminModule\DataProvider\ConfigFormDataProviderInterface'
            => 'Crm\AdminModule\DataProviders\ConfigFormDataProviderInterface',

        'Crm\AdminModule\Model\UniversalSearch'
            => 'Crm\AdminModule\Models\UniversalSearch',
        'Crm\AdminModule\Model\UniversalSearchDataProviderInterface'
            => 'Crm\AdminModule\Models\UniversalSearchDataProviderInterface',

        'Crm\AdminModule\Populator\AuditLogsPopulator'
            => 'Crm\AdminModule\Populators\AuditLogsPopulator',

        // ********************************************************************
        // extensions/api-module
        'Crm\ApiModule\Api\LazyApi'
            => 'Crm\ApiModule\Models\Api\Lazy\LazyApi',
        'Crm\ApiModule\Api\LazyApiDecider'
            => 'Crm\ApiModule\Models\Api\Lazy\LazyApiDecider',
        'Crm\ApiModule\Api\ApiConfigurationException'
            => 'Crm\ApiModule\Models\Api\ApiConfigurationException',
        'Crm\ApiModule\Api\ApiHandler'
            => 'Crm\ApiModule\Models\Api\ApiHandler',
        'Crm\ApiModule\Api\ApiHandlerInterface'
            => 'Crm\ApiModule\Models\Api\ApiHandlerInterface',
        'Crm\ApiModule\Api\ApiHeadersConfig'
            => 'Crm\ApiModule\Models\Api\ApiHeadersConfig',
        'Crm\ApiModule\Api\ApiLoggerConfig'
            => 'Crm\ApiModule\Models\Api\ApiLoggerConfig',
        'Crm\ApiModule\Api\ApiParamsValidatorInterface'
            => 'Crm\ApiModule\Models\Api\ApiParamsValidatorInterface',
        'Crm\ApiModule\Api\ApiRouteInterface'
            => 'Crm\ApiModule\Models\Api\ApiRouteInterface',
        'Crm\ApiModule\Api\ApiRoutersContainerInterface'
            => 'Crm\ApiModule\Models\Api\ApiRoutersContainerInterface',
        'Crm\ApiModule\Api\IdempotentHandlerInterface'
            => 'Crm\ApiModule\Models\Api\IdempotentHandlerInterface',
        'Crm\ApiModule\Api\JsonValidationResult'
            => 'Crm\ApiModule\Models\Api\JsonValidationResult',
        'Crm\ApiModule\Api\JsonValidationTrait'
            => 'Crm\ApiModule\Models\Api\JsonValidationTrait',
        'Crm\ApiModule\Models\LoggerEndpointIdentifier'
            => 'Crm\ApiModule\Models\Api\LoggerEndpointIdentifier',
        'Crm\ApiModule\Api\Runner'
            => 'Crm\ApiModule\Models\Api\Runner',

        'Crm\ApiModule\Authorization\AdminLoggedAuthorization'
            => 'Crm\ApiModule\Models\Authorization\AdminLoggedAuthorization',
        'Crm\ApiModule\Authorization\ApiAuthorizationInterface'
            => 'Crm\ApiModule\Models\Authorization\ApiAuthorizationInterface',
        'Crm\ApiModule\Authorization\BearerTokenAuthorization'
            => 'Crm\ApiModule\Models\Authorization\BearerTokenAuthorization',
        'Crm\ApiModule\Authorization\NoAuthorization'
            => 'Crm\ApiModule\Models\Authorization\NoAuthorization',
        'Crm\ApiModule\Authorization\Permissions'
            => 'Crm\ApiModule\Models\Authorization\Permissions',
        'Crm\ApiModule\Authorization\TokenParser'
            => 'Crm\ApiModule\Models\Authorization\TokenParser',

        'Crm\ApiModule\Params\ParamInterface'
            => 'Crm\ApiModule\Models\Params\ParamInterface',
        'Crm\ApiModule\Params\InputParam'
            => 'Crm\ApiModule\Models\Params\InputParam',
        'Crm\ApiModule\Params\ParamsProcessor'
            => 'Crm\ApiModule\Models\Params\ParamsProcessor',

        'Crm\ApiModule\Repository\ApiAccessRepository'
            => 'Crm\ApiModule\Repositories\ApiAccessRepository',
        'Crm\ApiModule\Repository\ApiAccessTokensRepository'
            => 'Crm\ApiModule\Repositories\ApiAccessTokensRepository',
        'Crm\ApiModule\Repository\ApiLogsRepository'
            => 'Crm\ApiModule\Repositories\ApiLogsRepository',
        'Crm\ApiModule\Repository\ApiTokenMetaRepository'
            => 'Crm\ApiModule\Repositories\ApiTokenMetaRepository',
        'Crm\ApiModule\Repository\ApiTokenStatsRepository'
            => 'Crm\ApiModule\Repositories\ApiTokenStatsRepository',
        'Crm\ApiModule\Repository\ApiTokensRepository'
            => 'Crm\ApiModule\Repositories\ApiTokensRepository',
        'Crm\ApiModule\Repository\IdempotentKeysRepository'
            => 'Crm\ApiModule\Repositories\IdempotentKeysRepository',
        'Crm\ApiModule\Repository\UserSourceAccessesRepository'
            => 'Crm\ApiModule\Repositories\UserSourceAccessesRepository',

        'Crm\ApiModule\Response\ApiResponseInterface'
            => 'Crm\ApiModule\Models\Response\ApiResponseInterface',
        'Crm\ApiModule\Api\JsonResponse'
            => 'Crm\ApiModule\Models\Response\JsonResponse',
        'Crm\ApiModule\Api\EmptyResponse'
            => 'Crm\ApiModule\Models\Response\EmptyResponse',
        'Crm\ApiModule\Api\RedirectResponse'
            => 'Crm\ApiModule\Models\Response\RedirectResponse',
        'Crm\ApiModule\Api\XmlResponse'
            => 'Crm\ApiModule\Models\Response\XmlResponse',

        'Crm\ApiModule\Router\ApiIdentifier'
            => 'Crm\ApiModule\Models\Router\ApiIdentifier',
        'Crm\ApiModule\Router\ApiRoute'
            => 'Crm\ApiModule\Models\Router\ApiRoute',
        'Crm\ApiModule\Router\ApiRoutesContainer'
            => 'Crm\ApiModule\Models\Router\ApiRoutesContainer',

        'Crm\ApiModule\Token\InternalToken'
            => 'Crm\ApiModule\Models\Token\InternalToken',

        'Crm\ApiModule\Populator\ApiTokensPopulator'
            => 'Crm\ApiModule\Populators\ApiTokensPopulator',

        // ********************************************************************
        // extensions/apple-appstore-module
        'Crm\AppleAppstoreModule\Components\StopRecurrentPaymentInfoWidget'
            => 'Crm\AppleAppstoreModule\Components\StopRecurrentPaymentInfoWidget\StopRecurrentPaymentInfoWidget',

        'Crm\AppleAppstoreModule\Repository\AppleAppstoreOriginalTransactionsRepository'
            => 'Crm\AppleAppstoreModule\Repositories\AppleAppstoreOriginalTransactionsRepository',
        'Crm\AppleAppstoreModule\Repository\AppleAppstoreServerToServerNotificationLogRepository'
            => 'Crm\AppleAppstoreModule\Repositories\AppleAppstoreServerToServerNotificationLogRepository',
        'Crm\AppleAppstoreModule\Repository\AppleAppstoreSubscriptionTypesRepository'
            => 'Crm\AppleAppstoreModule\Repositories\AppleAppstoreSubscriptionTypesRepository',
        'Crm\AppleAppstoreModule\Repository\AppleAppstoreTransactionDeviceTokensRepository'
            => 'Crm\AppleAppstoreModule\Repositories\AppleAppstoreTransactionDeviceTokensRepository',

        'Crm\AppleAppstoreModule\Model\DoNotRetryException'
            => 'Crm\AppleAppstoreModule\Models\ServerToServerNotificationProcessor\DoNotRetryException',
        'Crm\AppleAppstoreModule\Model\ServerToServerNotificationDateTimesTrait'
            => 'Crm\AppleAppstoreModule\Models\ServerToServerNotificationProcessor\ServerToServerNotificationDateTimesTrait',
        'Crm\AppleAppstoreModule\Model\ServerToServerNotificationLatestReceiptTrait'
            => 'Crm\AppleAppstoreModule\Models\ServerToServerNotificationProcessor\ServerToServerNotificationLatestReceiptTrait',
        'Crm\AppleAppstoreModule\Model\ServerToServerNotificationPendingRenewalTrait'
            => 'Crm\AppleAppstoreModule\Models\ServerToServerNotificationProcessor\ServerToServerNotificationPendingRenewalTrait',
        'Crm\AppleAppstoreModule\Model\ServerToServerNotificationProcessor'
            => 'Crm\AppleAppstoreModule\Models\ServerToServerNotificationProcessor\ServerToServerNotificationProcessor',
        'Crm\AppleAppstoreModule\Model\ServerToServerNotificationProcessorInterface'
            => 'Crm\AppleAppstoreModule\Models\ServerToServerNotificationProcessor\ServerToServerNotificationProcessorInterface',

        'Crm\AppleAppstoreModule\User\AppleAppstoreUserDataProvider'
            => 'Crm\AppleAppstoreModule\Models\User\AppleAppstoreUserDataProvider',

        'Crm\AppleAppstoreModule\Model\AppleAppstoreValidatorFactory'
            => 'Crm\AppleAppstoreModule\Models\AppleAppstoreValidatorFactory',
        'Crm\AppleAppstoreModule\Model\Config'
            => 'Crm\AppleAppstoreModule\Models\Config',
        'Crm\AppleAppstoreModule\Model\LatestReceiptInfo'
            => 'Crm\AppleAppstoreModule\Models\LatestReceiptInfo',
        'Crm\AppleAppstoreModule\Model\PendingRenewalInfo'
            => 'Crm\AppleAppstoreModule\Models\PendingRenewalInfo',
        'Crm\AppleAppstoreModule\Model\ServerToServerNotification'
            => 'Crm\AppleAppstoreModule\Models\ServerToServerNotification',
        'Crm\AppleAppstoreModule\Model\UnifiedReceipt'
            => 'Crm\AppleAppstoreModule\Models\UnifiedReceipt',

        // ********************************************************************
        // extensions/application-module

        // ********************************************************************
        // extensions/coupon-module
        'Crm\CouponModule\DataProvider\FilterUsersFormDataProvider'
            => 'Crm\CouponModule\DataProviders\FilterUsersFormDataProvider',

        'Crm\CouponModule\CannotAssignCouponException'
            => 'Crm\CouponModule\Generator\CannotAssignCouponException',
        'Crm\CouponModule\CouponAlreadyAssignedException'
            => 'Crm\CouponModule\Generator\CouponAlreadyAssignedException',
        'Crm\CouponModule\CouponAlreadyExistsException'
            => 'Crm\CouponModule\Generator\CouponAlreadyExistsException',
        'Crm\CouponModule\CouponExpiredException'
            => 'Crm\CouponModule\Generator\CouponExpiredException',
        'Crm\CouponModule\CouponGeneratorInterface'
            => 'Crm\CouponModule\Generator\CouponGeneratorInterface',
        'Crm\CouponModule\DefaultCouponGenerator'
            => 'Crm\CouponModule\Generator\DefaultCouponGenerator',

        'Crm\CouponModule\Repository\CouponCodesRepository'
            => 'Crm\CouponModule\Repositories\CouponCodesRepository',
        'Crm\CouponModule\Repository\CouponsRepository'
            => 'Crm\CouponModule\Repositories\CouponsRepository',

        'Crm\CouponModule\Repository\SubscriptionHasCouponCodeCriteria'
            => 'Crm\CouponModule\Scenarios\SubscriptionHasCouponCodeCriteria',

        // ********************************************************************
        // extensions/dashboard-module
        // - no changes required

        // ********************************************************************
        // extensions/gifts-module
        'Crm\GiftsModule\Components\DonatedSubscriptionListingWidget'
            => 'Crm\GiftsModule\Components\DonatedSubscriptionListingWidget\DonatedSubscriptionListingWidget',
        'Crm\GiftsModule\Components\GiftCoupons'
            => 'Crm\GiftsModule\Components\GiftCoupons\GiftCoupons',
        'Crm\GiftsModule\Components\GiftPaymentItemsListWidget'
            => 'Crm\GiftsModule\Components\GiftPaymentItemsListWidget\GiftPaymentItemsListWidget',
        'Crm\GiftsModule\Components\OrderDonatedSubscriptionInfo'
            => 'Crm\GiftsModule\Components\OrderDonatedSubscriptionInfo\OrderDonatedSubscriptionInfo',
        'Crm\GiftsModule\Components\PaymentSuccessGiftSubscriptionAddressWidget'
            => 'Crm\GiftsModule\Components\PaymentSuccessGiftSubscriptionAddressWidget\PaymentSuccessGiftSubscriptionAddressWidget',

        'Crm\GiftsModule\DataProvider\CanDeleteAddressDataProvider'
            => 'Crm\GiftsModule\DataProviders\CanDeleteAddressDataProvider',
        'Crm\GiftsModule\DataProvider\PaymentItemTypesFilterDataProvider'
            => 'Crm\GiftsModule\DataProviders\PaymentItemTypesFilterDataProvider',

        'Crm\GiftsModule\PaymentItem\GiftPaymentItem'
            => 'Crm\GiftsModule\Models\PaymentItem\GiftPaymentItem',

        'Crm\GiftsModule\Repository\PaymentGiftCouponsRepository'
            => 'Crm\GiftsModule\Repositories\PaymentGiftCouponsRepository',

        // ********************************************************************
        // extensions/google-play-billing-module
        'Crm\GooglePlayBillingModule\Components\StopRecurrentPaymentButtonWidget'
            => 'Crm\GooglePlayBillingModule\Components\StopRecurrentPaymentButtonWidget\StopRecurrentPaymentButtonWidget',

        'Crm\GooglePlayBillingModule\Repository\DeveloperNotificationsRepository'
            => 'Crm\GooglePlayBillingModule\Repositories\DeveloperNotificationsRepository',
        'Crm\GooglePlayBillingModule\Repository\GooglePlaySubscriptionTypesRepository'
            => 'Crm\GooglePlayBillingModule\Repositories\GooglePlaySubscriptionTypesRepository',
        'Crm\GooglePlayBillingModule\Repository\PurchaseDeviceTokensRepository'
            => 'Crm\GooglePlayBillingModule\Repositories\PurchaseDeviceTokensRepository',
        'Crm\GooglePlayBillingModule\Repository\PurchaseTokensRepository'
            => 'Crm\GooglePlayBillingModule\Repositories\PurchaseTokensRepository',

        'Crm\GooglePlayBillingModule\Model\SubscriptionResponseDateTimesTrait'
            => 'Crm\GooglePlayBillingModule\Models\SubscriptionResponseProcessor\SubscriptionResponseDateTimesTrait',
        'Crm\GooglePlayBillingModule\Model\SubscriptionResponseProcessor'
            => 'Crm\GooglePlayBillingModule\Models\SubscriptionResponseProcessor\SubscriptionResponseProcessor',
        'Crm\GooglePlayBillingModule\Model\SubscriptionResponseProcessorInterface'
            => 'Crm\GooglePlayBillingModule\Models\SubscriptionResponseProcessor\SubscriptionResponseProcessorInterface',

        'Crm\GooglePlayBillingModule\User\GooglePlayUserDataProvider'
            => 'Crm\GooglePlayBillingModule\Models\User\GooglePlayUserDataProvider',
        'Crm\GooglePlayBillingModule\Model\Config'
            => 'Crm\GooglePlayBillingModule\Models\Config',
        'Crm\GooglePlayBillingModule\Model\GooglePlayValidatorFactory'
            => 'Crm\GooglePlayBillingModule\Models\GooglePlayValidatorFactory',

        // ********************************************************************
        // extensions/gopay-module
        'Crm\GoPayModule\Repository\GopayPaymentValues'
            => 'Crm\GoPayModule\Repositories\GopayPaymentValues',
        'Crm\GoPayModule\Repository\GopayPaymentsRepository'
            => 'Crm\GoPayModule\Repositories\GopayPaymentsRepository',

        // ********************************************************************
        // extensions/invoices-module
        'Crm\InvoicesModule\Components\ReceiptAdminButtonFactory'
            => 'Crm\InvoicesModule\Components\DownloadReceiptButton\ReceiptAdminButtonFactory',
        'Crm\InvoicesModule\Components\DownloadReceiptButton'
            => 'Crm\InvoicesModule\Components\DownloadReceiptButton\DownloadReceiptButton',
        'Crm\InvoicesModule\Components\DownloadReceiptButtonFactory'
            => 'Crm\InvoicesModule\Components\DownloadReceiptButton\DownloadReceiptButtonFactory',
        'Crm\InvoicesModule\Components\InvoiceAdminButtonFactory'
            => 'Crm\InvoicesModule\Components\InvoiceButton\InvoiceAdminButtonFactory',
        'Crm\InvoicesModule\Components\InvoiceButton'
            => 'Crm\InvoicesModule\Components\InvoiceButton\InvoiceButton',
        'Crm\InvoicesModule\Components\InvoiceFrontendButtonFactory'
            => 'Crm\InvoicesModule\Components\InvoiceButton\InvoiceFrontendButtonFactory',
        'Crm\InvoicesModule\Components\InvoiceDetailsWidget'
            => 'Crm\InvoicesModule\Components\InvoiceDetailsWidget\InvoiceDetailsWidget',
        'Crm\InvoicesModule\Components\InvoiceLabel'
            => 'Crm\InvoicesModule\Components\InvoiceLabel\InvoiceLabel',
        'Crm\InvoicesModule\Components\PaymentSuccessInvoiceWidget'
            => 'Crm\InvoicesModule\Components\PaymentSuccessInvoiceWidget\PaymentSuccessInvoiceWidget',

        'Crm\InvoicesModule\DataProvider\PaymentInvoiceProvider'
            => 'Crm\InvoicesModule\DataProviders\PaymentInvoiceProvider',
        'Crm\InvoicesModule\DataProvider\UserFormDataProvider'
            => 'Crm\InvoicesModule\DataProviders\UserFormDataProvider',
        'Crm\InvoicesModule\DataProvider\ConfigFormDataProvider'
            => 'Crm\InvoicesModule\DataProviders\ConfigFormDataProvider',

        'Crm\InvoicesModule\InvoiceGenerationException'
            => 'Crm\InvoicesModule\Models\Generator\InvoiceGenerationException',
        'Crm\InvoicesModule\PaymentNotInvoiceableException'
            => 'Crm\InvoicesModule\Models\Generator\PaymentNotInvoiceableException',
        'Crm\InvoicesModule\ReceiptGenerator'
            => 'Crm\InvoicesModule\Models\Generator\ReceiptGenerator',
        'Crm\InvoicesModule\InvoiceGenerator'
            => 'Crm\InvoicesModule\Models\Generator\InvoiceGenerator',

        'Crm\InvoicesModule\Repository\InvoiceItemsRepository'
            => 'Crm\InvoicesModule\Repositories\InvoiceItemsRepository',
        'Crm\InvoicesModule\Repository\InvoicesRepository'
            => 'Crm\InvoicesModule\Repositories\InvoicesRepository',
        'Crm\InvoicesModule\Repository\InvoiceNumbersRepository'
            => 'Crm\InvoicesModule\Repositories\InvoiceNumbersRepository',

        'Crm\InvoicesModule\Sandbox\InvoiceSandbox'
            => 'Crm\InvoicesModule\Models\Sandbox\InvoiceSandbox',
        'Crm\InvoicesModule\Sandbox\InvoiceZipGenerator'
            => 'Crm\InvoicesModule\Models\Sandbox\InvoiceZipGenerator',

        'Crm\InvoicesModule\User\InvoicesUserDataProvider'
            => 'Crm\InvoicesModule\DataProviders\InvoicesUserDataProvider',

        'Crm\InvoicesModule\Repository\InvoiceNumber'
            => 'Crm\InvoicesModule\Models\InvoiceNumber\InvoiceNumber',
        'Crm\InvoicesModule\Model\InvoiceNumberInterface'
            => 'Crm\InvoicesModule\Models\InvoiceNumber\InvoiceNumberInterface',

        // ********************************************************************
        // extensions/issues-module
        // ********************************************************************
        // extensions/mobiletech-module
        // ********************************************************************
        // extensions/muj-dum-module
        // ********************************************************************
        // extensions/multicash-module
        // ********************************************************************
        // extensions/onboarding-module
        // ********************************************************************
        // extensions/payments-module
        // ********************************************************************
        // extensions/print-module
        // ********************************************************************
        // extensions/privatbankar-module
        // ********************************************************************
        // extensions/products-module
        // ********************************************************************
        // extensions/salesfunnel-module
        // ********************************************************************
        // extensions/scenarios-module
        // ********************************************************************
        // extensions/segment-module
        // ********************************************************************
        // extensions/slsp-sporopay-module
        // ********************************************************************
        // extensions/subscriptions-module
        // ********************************************************************
        // extensions/upgrades-module
        // ********************************************************************
        // extensions/users-module
        // ********************************************************************
        // extensions/vub-eplatby-module
        // ********************************************************************
        // extensions/wordpress-module
    ]);
};
