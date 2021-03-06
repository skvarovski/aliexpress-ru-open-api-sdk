# OpenAPI\Client\OpenAsyncProductApiServiceApi

All URIs are relative to https://openapi.aliexpress.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**openAsyncProductApiServiceGetBrandList()**](OpenAsyncProductApiServiceApi.md#openAsyncProductApiServiceGetBrandList) | **POST** /api/v1/brand/get-brand-list | 
[**openAsyncProductApiServiceGetProducts()**](OpenAsyncProductApiServiceApi.md#openAsyncProductApiServiceGetProducts) | **POST** /api/v1/product/get-products | Метод получения продуктов
[**openAsyncProductApiServiceGetTasks()**](OpenAsyncProductApiServiceApi.md#openAsyncProductApiServiceGetTasks) | **GET** /api/v1/tasks | Метод получения списка задач на создание/обновление товаров
[**openAsyncProductApiServiceOfflineProducts()**](OpenAsyncProductApiServiceApi.md#openAsyncProductApiServiceOfflineProducts) | **POST** /api/v1/product/offline | Метод перевода продуктов в offline
[**openAsyncProductApiServiceOnlineProducts()**](OpenAsyncProductApiServiceApi.md#openAsyncProductApiServiceOnlineProducts) | **POST** /api/v1/product/online | Метод перевода продуктов в online
[**openAsyncProductApiServiceProductCreate()**](OpenAsyncProductApiServiceApi.md#openAsyncProductApiServiceProductCreate) | **POST** /api/v1/product/create | Метод создания продуктов
[**openAsyncProductApiServiceProductUpdateField()**](OpenAsyncProductApiServiceApi.md#openAsyncProductApiServiceProductUpdateField) | **POST** /api/v1/product/update-field | Метод обновления поля продукта
[**openAsyncProductApiServiceScrollProductByFilter()**](OpenAsyncProductApiServiceApi.md#openAsyncProductApiServiceScrollProductByFilter) | **POST** /api/v1/scroll-product-by-filter | 
[**openAsyncProductApiServiceScrollShortProductByFilter()**](OpenAsyncProductApiServiceApi.md#openAsyncProductApiServiceScrollShortProductByFilter) | **POST** /api/v1/scroll-short-product-by-filter | 
[**openAsyncProductApiServiceUpdateSkuPrice()**](OpenAsyncProductApiServiceApi.md#openAsyncProductApiServiceUpdateSkuPrice) | **POST** /api/v1/product/update-sku-price | Метод обновления цены продукта по ску коду
[**openAsyncProductApiServiceUpdateSkuStock()**](OpenAsyncProductApiServiceApi.md#openAsyncProductApiServiceUpdateSkuStock) | **POST** /api/v1/product/update-sku-stock | Метод обновления стока продукта по ску коду


## `openAsyncProductApiServiceGetBrandList()`

```php
openAsyncProductApiServiceGetBrandList($body): \OpenAPI\Client\Model\OpenAsyncProductApiGetBrandListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenAsyncProductApiServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\OpenAsyncProductApiGetBrandListRequest(); // \OpenAPI\Client\Model\OpenAsyncProductApiGetBrandListRequest

try {
    $result = $apiInstance->openAsyncProductApiServiceGetBrandList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenAsyncProductApiServiceApi->openAsyncProductApiServiceGetBrandList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\OpenAsyncProductApiGetBrandListRequest**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\OpenAsyncProductApiGetBrandListResponse**](../Model/OpenAsyncProductApiGetBrandListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `openAsyncProductApiServiceGetProducts()`

```php
openAsyncProductApiServiceGetProducts($body): \OpenAPI\Client\Model\OpenAsyncProductApiGetProductsResponse
```

Метод получения продуктов

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenAsyncProductApiServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\OpenAsyncProductApiGetProductsRequest(); // \OpenAPI\Client\Model\OpenAsyncProductApiGetProductsRequest

try {
    $result = $apiInstance->openAsyncProductApiServiceGetProducts($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenAsyncProductApiServiceApi->openAsyncProductApiServiceGetProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\OpenAsyncProductApiGetProductsRequest**](../Model/OpenAsyncProductApiGetProductsRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\OpenAsyncProductApiGetProductsResponse**](../Model/OpenAsyncProductApiGetProductsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `openAsyncProductApiServiceGetTasks()`

```php
openAsyncProductApiServiceGetTasks($group_id): \OpenAPI\Client\Model\OpenAsyncProductApiGetTasksResponse
```

Метод получения списка задач на создание/обновление товаров

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Auth-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OpenAsyncProductApiServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Идентификатор группы задач полученный при создании/обновлении товаров

try {
    $result = $apiInstance->openAsyncProductApiServiceGetTasks($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenAsyncProductApiServiceApi->openAsyncProductApiServiceGetTasks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| Идентификатор группы задач полученный при создании/обновлении товаров |

### Return type

[**\OpenAPI\Client\Model\OpenAsyncProductApiGetTasksResponse**](../Model/OpenAsyncProductApiGetTasksResponse.md)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `openAsyncProductApiServiceOfflineProducts()`

```php
openAsyncProductApiServiceOfflineProducts($open_async_product_api_on_off_products_request): \OpenAPI\Client\Model\OpenAsyncProductApiOnOffProductsResponse
```

Метод перевода продуктов в offline

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Auth-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OpenAsyncProductApiServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$open_async_product_api_on_off_products_request = new \OpenAPI\Client\Model\OpenAsyncProductApiOnOffProductsRequest(); // \OpenAPI\Client\Model\OpenAsyncProductApiOnOffProductsRequest

try {
    $result = $apiInstance->openAsyncProductApiServiceOfflineProducts($open_async_product_api_on_off_products_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenAsyncProductApiServiceApi->openAsyncProductApiServiceOfflineProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_async_product_api_on_off_products_request** | [**\OpenAPI\Client\Model\OpenAsyncProductApiOnOffProductsRequest**](../Model/OpenAsyncProductApiOnOffProductsRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\OpenAsyncProductApiOnOffProductsResponse**](../Model/OpenAsyncProductApiOnOffProductsResponse.md)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `openAsyncProductApiServiceOnlineProducts()`

```php
openAsyncProductApiServiceOnlineProducts($open_async_product_api_on_off_products_request): \OpenAPI\Client\Model\OpenAsyncProductApiOnOffProductsResponse
```

Метод перевода продуктов в online

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Auth-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OpenAsyncProductApiServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$open_async_product_api_on_off_products_request = new \OpenAPI\Client\Model\OpenAsyncProductApiOnOffProductsRequest(); // \OpenAPI\Client\Model\OpenAsyncProductApiOnOffProductsRequest

try {
    $result = $apiInstance->openAsyncProductApiServiceOnlineProducts($open_async_product_api_on_off_products_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenAsyncProductApiServiceApi->openAsyncProductApiServiceOnlineProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_async_product_api_on_off_products_request** | [**\OpenAPI\Client\Model\OpenAsyncProductApiOnOffProductsRequest**](../Model/OpenAsyncProductApiOnOffProductsRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\OpenAsyncProductApiOnOffProductsResponse**](../Model/OpenAsyncProductApiOnOffProductsResponse.md)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `openAsyncProductApiServiceProductCreate()`

```php
openAsyncProductApiServiceProductCreate($body): \OpenAPI\Client\Model\OpenAsyncProductApiProductCreateResponse
```

Метод создания продуктов

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Auth-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OpenAsyncProductApiServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OpenAsyncProductApiProductCreateRequestDoc(); // \OpenAPI\Client\Model\OpenAsyncProductApiProductCreateRequestDoc

try {
    $result = $apiInstance->openAsyncProductApiServiceProductCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenAsyncProductApiServiceApi->openAsyncProductApiServiceProductCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **\OpenAPI\Client\Model\OpenAsyncProductApiProductCreateRequestDoc**|  |

### Return type

[**\OpenAPI\Client\Model\OpenAsyncProductApiProductCreateResponse**](../Model/OpenAsyncProductApiProductCreateResponse.md)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `openAsyncProductApiServiceProductUpdateField()`

```php
openAsyncProductApiServiceProductUpdateField($open_async_product_api_product_update_field_request): \OpenAPI\Client\Model\OpenAsyncProductApiProductUpdateFieldResponse
```

Метод обновления поля продукта

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Auth-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OpenAsyncProductApiServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$open_async_product_api_product_update_field_request = new \OpenAPI\Client\Model\OpenAsyncProductApiProductUpdateFieldRequest(); // \OpenAPI\Client\Model\OpenAsyncProductApiProductUpdateFieldRequest

try {
    $result = $apiInstance->openAsyncProductApiServiceProductUpdateField($open_async_product_api_product_update_field_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenAsyncProductApiServiceApi->openAsyncProductApiServiceProductUpdateField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_async_product_api_product_update_field_request** | [**\OpenAPI\Client\Model\OpenAsyncProductApiProductUpdateFieldRequest**](../Model/OpenAsyncProductApiProductUpdateFieldRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\OpenAsyncProductApiProductUpdateFieldResponse**](../Model/OpenAsyncProductApiProductUpdateFieldResponse.md)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `openAsyncProductApiServiceScrollProductByFilter()`

```php
openAsyncProductApiServiceScrollProductByFilter($body): \OpenAPI\Client\Model\OpenAsyncProductApiScrollProductByFilterResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Auth-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OpenAsyncProductApiServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\OpenAsyncProductApiScrollProductByFilterRequest(); // \OpenAPI\Client\Model\OpenAsyncProductApiScrollProductByFilterRequest

try {
    $result = $apiInstance->openAsyncProductApiServiceScrollProductByFilter($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenAsyncProductApiServiceApi->openAsyncProductApiServiceScrollProductByFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\OpenAsyncProductApiScrollProductByFilterRequest**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\OpenAsyncProductApiScrollProductByFilterResponse**](../Model/OpenAsyncProductApiScrollProductByFilterResponse.md)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `openAsyncProductApiServiceScrollShortProductByFilter()`

```php
openAsyncProductApiServiceScrollShortProductByFilter($body): \OpenAPI\Client\Model\OpenAsyncProductApiScrollShortProductByFilterResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenAsyncProductApiServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\OpenAsyncProductApiScrollProductByFilterRequest(); // \OpenAPI\Client\Model\OpenAsyncProductApiScrollProductByFilterRequest

try {
    $result = $apiInstance->openAsyncProductApiServiceScrollShortProductByFilter($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenAsyncProductApiServiceApi->openAsyncProductApiServiceScrollShortProductByFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\OpenAsyncProductApiScrollProductByFilterRequest**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\OpenAsyncProductApiScrollShortProductByFilterResponse**](../Model/OpenAsyncProductApiScrollShortProductByFilterResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `openAsyncProductApiServiceUpdateSkuPrice()`

```php
openAsyncProductApiServiceUpdateSkuPrice($body): \OpenAPI\Client\Model\OpenAsyncProductApiUpdateSkuPriceResponse
```

Метод обновления цены продукта по ску коду

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Auth-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OpenAsyncProductApiServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\OpenAsyncProductApiUpdateSkuPriceRequest(); // \OpenAPI\Client\Model\OpenAsyncProductApiUpdateSkuPriceRequest

try {
    $result = $apiInstance->openAsyncProductApiServiceUpdateSkuPrice($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenAsyncProductApiServiceApi->openAsyncProductApiServiceUpdateSkuPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\OpenAsyncProductApiUpdateSkuPriceRequest**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\OpenAsyncProductApiUpdateSkuPriceResponse**](../Model/OpenAsyncProductApiUpdateSkuPriceResponse.md)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `openAsyncProductApiServiceUpdateSkuStock()`

```php
openAsyncProductApiServiceUpdateSkuStock($body): \OpenAPI\Client\Model\OpenAsyncProductApiUpdateSkuStockResponse
```

Метод обновления стока продукта по ску коду

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Auth-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OpenAsyncProductApiServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\OpenAsyncProductApiUpdateSkuStockRequest(); // \OpenAPI\Client\Model\OpenAsyncProductApiUpdateSkuStockRequest

try {
    $result = $apiInstance->openAsyncProductApiServiceUpdateSkuStock($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenAsyncProductApiServiceApi->openAsyncProductApiServiceUpdateSkuStock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\OpenAsyncProductApiUpdateSkuStockRequest**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\OpenAsyncProductApiUpdateSkuStockResponse**](../Model/OpenAsyncProductApiUpdateSkuStockResponse.md)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
