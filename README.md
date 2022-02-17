# OpenAPIClient-php

open-async-product-api


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://openapi.aliexpress.ru*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*OpenAsyncProductApiServiceApi* | [**openAsyncProductApiServiceGetBrandList**](docs/Api/OpenAsyncProductApiServiceApi.md#openasyncproductapiservicegetbrandlist) | **POST** /api/v1/brand/get-brand-list | 
*OpenAsyncProductApiServiceApi* | [**openAsyncProductApiServiceGetProducts**](docs/Api/OpenAsyncProductApiServiceApi.md#openasyncproductapiservicegetproducts) | **POST** /api/v1/product/get-products | Метод получения продуктов
*OpenAsyncProductApiServiceApi* | [**openAsyncProductApiServiceGetTasks**](docs/Api/OpenAsyncProductApiServiceApi.md#openasyncproductapiservicegettasks) | **GET** /api/v1/tasks | Метод получения списка задач на создание/обновление товаров
*OpenAsyncProductApiServiceApi* | [**openAsyncProductApiServiceOfflineProducts**](docs/Api/OpenAsyncProductApiServiceApi.md#openasyncproductapiserviceofflineproducts) | **POST** /api/v1/product/offline | Метод перевода продуктов в offline
*OpenAsyncProductApiServiceApi* | [**openAsyncProductApiServiceOnlineProducts**](docs/Api/OpenAsyncProductApiServiceApi.md#openasyncproductapiserviceonlineproducts) | **POST** /api/v1/product/online | Метод перевода продуктов в online
*OpenAsyncProductApiServiceApi* | [**openAsyncProductApiServiceProductCreate**](docs/Api/OpenAsyncProductApiServiceApi.md#openasyncproductapiserviceproductcreate) | **POST** /api/v1/product/create | Метод создания продуктов
*OpenAsyncProductApiServiceApi* | [**openAsyncProductApiServiceProductUpdateField**](docs/Api/OpenAsyncProductApiServiceApi.md#openasyncproductapiserviceproductupdatefield) | **POST** /api/v1/product/update-field | Метод обновления поля продукта
*OpenAsyncProductApiServiceApi* | [**openAsyncProductApiServiceScrollProductByFilter**](docs/Api/OpenAsyncProductApiServiceApi.md#openasyncproductapiservicescrollproductbyfilter) | **POST** /api/v1/scroll-product-by-filter | 
*OpenAsyncProductApiServiceApi* | [**openAsyncProductApiServiceScrollShortProductByFilter**](docs/Api/OpenAsyncProductApiServiceApi.md#openasyncproductapiservicescrollshortproductbyfilter) | **POST** /api/v1/scroll-short-product-by-filter | 
*OpenAsyncProductApiServiceApi* | [**openAsyncProductApiServiceUpdateSkuPrice**](docs/Api/OpenAsyncProductApiServiceApi.md#openasyncproductapiserviceupdateskuprice) | **POST** /api/v1/product/update-sku-price | Метод обновления цены продукта по ску коду
*OpenAsyncProductApiServiceApi* | [**openAsyncProductApiServiceUpdateSkuStock**](docs/Api/OpenAsyncProductApiServiceApi.md#openasyncproductapiserviceupdateskustock) | **POST** /api/v1/product/update-sku-stock | Метод обновления стока продукта по ску коду

## Models

- [GetProductDescription](docs/Model/GetProductDescription.md)
- [GetProductGroup](docs/Model/GetProductGroup.md)
- [GetProductMedia](docs/Model/GetProductMedia.md)
- [GetProductProperty](docs/Model/GetProductProperty.md)
- [GetProductSKU](docs/Model/GetProductSKU.md)
- [GetProductSubject](docs/Model/GetProductSubject.md)
- [GetProductsByIDDataResponseProduct](docs/Model/GetProductsByIDDataResponseProduct.md)
- [OpenAsyncProductApiAttributeDto](docs/Model/OpenAsyncProductApiAttributeDto.md)
- [OpenAsyncProductApiBatchItemResult](docs/Model/OpenAsyncProductApiBatchItemResult.md)
- [OpenAsyncProductApiDetail](docs/Model/OpenAsyncProductApiDetail.md)
- [OpenAsyncProductApiErrorResponse](docs/Model/OpenAsyncProductApiErrorResponse.md)
- [OpenAsyncProductApiGetBrandListRequest](docs/Model/OpenAsyncProductApiGetBrandListRequest.md)
- [OpenAsyncProductApiGetBrandListResponse](docs/Model/OpenAsyncProductApiGetBrandListResponse.md)
- [OpenAsyncProductApiGetMyBrandListFilters](docs/Model/OpenAsyncProductApiGetMyBrandListFilters.md)
- [OpenAsyncProductApiGetMyBrandListSort](docs/Model/OpenAsyncProductApiGetMyBrandListSort.md)
- [OpenAsyncProductApiGetProduct](docs/Model/OpenAsyncProductApiGetProduct.md)
- [OpenAsyncProductApiGetProductsByIDData](docs/Model/OpenAsyncProductApiGetProductsByIDData.md)
- [OpenAsyncProductApiGetProductsByIDDataDescription](docs/Model/OpenAsyncProductApiGetProductsByIDDataDescription.md)
- [OpenAsyncProductApiGetProductsByIDDataGroup](docs/Model/OpenAsyncProductApiGetProductsByIDDataGroup.md)
- [OpenAsyncProductApiGetProductsByIDDataMedia](docs/Model/OpenAsyncProductApiGetProductsByIDDataMedia.md)
- [OpenAsyncProductApiGetProductsByIDDataProperty](docs/Model/OpenAsyncProductApiGetProductsByIDDataProperty.md)
- [OpenAsyncProductApiGetProductsByIDDataSKU](docs/Model/OpenAsyncProductApiGetProductsByIDDataSKU.md)
- [OpenAsyncProductApiGetProductsByIDDataSubject](docs/Model/OpenAsyncProductApiGetProductsByIDDataSubject.md)
- [OpenAsyncProductApiGetProductsRequest](docs/Model/OpenAsyncProductApiGetProductsRequest.md)
- [OpenAsyncProductApiGetProductsResponse](docs/Model/OpenAsyncProductApiGetProductsResponse.md)
- [OpenAsyncProductApiGetTasksResponse](docs/Model/OpenAsyncProductApiGetTasksResponse.md)
- [OpenAsyncProductApiHTMLContent](docs/Model/OpenAsyncProductApiHTMLContent.md)
- [OpenAsyncProductApiItem](docs/Model/OpenAsyncProductApiItem.md)
- [OpenAsyncProductApiModuleList](docs/Model/OpenAsyncProductApiModuleList.md)
- [OpenAsyncProductApiMyBrandDTO](docs/Model/OpenAsyncProductApiMyBrandDTO.md)
- [OpenAsyncProductApiOnOffProductsRequest](docs/Model/OpenAsyncProductApiOnOffProductsRequest.md)
- [OpenAsyncProductApiOnOffProductsResponse](docs/Model/OpenAsyncProductApiOnOffProductsResponse.md)
- [OpenAsyncProductApiPaginationResponseDTO](docs/Model/OpenAsyncProductApiPaginationResponseDTO.md)
- [OpenAsyncProductApiProduct](docs/Model/OpenAsyncProductApiProduct.md)
- [OpenAsyncProductApiProductCreateRequestDoc](docs/Model/OpenAsyncProductApiProductCreateRequestDoc.md)
- [OpenAsyncProductApiProductCreateResponse](docs/Model/OpenAsyncProductApiProductCreateResponse.md)
- [OpenAsyncProductApiProductUpdateFieldRequest](docs/Model/OpenAsyncProductApiProductUpdateFieldRequest.md)
- [OpenAsyncProductApiProductUpdateFieldResponse](docs/Model/OpenAsyncProductApiProductUpdateFieldResponse.md)
- [OpenAsyncProductApiScrollProductByFilterRequest](docs/Model/OpenAsyncProductApiScrollProductByFilterRequest.md)
- [OpenAsyncProductApiScrollProductByFilterResponse](docs/Model/OpenAsyncProductApiScrollProductByFilterResponse.md)
- [OpenAsyncProductApiScrollShortProductByFilterResponse](docs/Model/OpenAsyncProductApiScrollShortProductByFilterResponse.md)
- [OpenAsyncProductApiScrollShortProductByFilterResponseProduct](docs/Model/OpenAsyncProductApiScrollShortProductByFilterResponseProduct.md)
- [OpenAsyncProductApiScrollShortProductByFilterResponseSKU](docs/Model/OpenAsyncProductApiScrollShortProductByFilterResponseSKU.md)
- [OpenAsyncProductApiSingleLanguageDescriptionDto](docs/Model/OpenAsyncProductApiSingleLanguageDescriptionDto.md)
- [OpenAsyncProductApiSingleLanguageTitleDto](docs/Model/OpenAsyncProductApiSingleLanguageTitleDto.md)
- [OpenAsyncProductApiSkuAttributesDto](docs/Model/OpenAsyncProductApiSkuAttributesDto.md)
- [OpenAsyncProductApiSkuInfoDto](docs/Model/OpenAsyncProductApiSkuInfoDto.md)
- [OpenAsyncProductApiSkuPrice](docs/Model/OpenAsyncProductApiSkuPrice.md)
- [OpenAsyncProductApiSkuStock](docs/Model/OpenAsyncProductApiSkuStock.md)
- [OpenAsyncProductApiTask](docs/Model/OpenAsyncProductApiTask.md)
- [OpenAsyncProductApiTaskError](docs/Model/OpenAsyncProductApiTaskError.md)
- [OpenAsyncProductApiTaskResult](docs/Model/OpenAsyncProductApiTaskResult.md)
- [OpenAsyncProductApiUpdateField](docs/Model/OpenAsyncProductApiUpdateField.md)
- [OpenAsyncProductApiUpdateOneFieldTaskResult](docs/Model/OpenAsyncProductApiUpdateOneFieldTaskResult.md)
- [OpenAsyncProductApiUpdateSkuPriceRequest](docs/Model/OpenAsyncProductApiUpdateSkuPriceRequest.md)
- [OpenAsyncProductApiUpdateSkuPriceRequestProduct](docs/Model/OpenAsyncProductApiUpdateSkuPriceRequestProduct.md)
- [OpenAsyncProductApiUpdateSkuPriceResponse](docs/Model/OpenAsyncProductApiUpdateSkuPriceResponse.md)
- [OpenAsyncProductApiUpdateSkuStockRequest](docs/Model/OpenAsyncProductApiUpdateSkuStockRequest.md)
- [OpenAsyncProductApiUpdateSkuStockRequestProduct](docs/Model/OpenAsyncProductApiUpdateSkuStockRequestProduct.md)
- [OpenAsyncProductApiUpdateSkuStockResponse](docs/Model/OpenAsyncProductApiUpdateSkuStockResponse.md)
- [ScopenAsyncProductApiError](docs/Model/ScopenAsyncProductApiError.md)
- [ScrollProductByFilterRequestFilter](docs/Model/ScrollProductByFilterRequestFilter.md)
- [ScrollProductByFilterRequestScrollProductFilterSearchContentDTO](docs/Model/ScrollProductByFilterRequestScrollProductFilterSearchContentDTO.md)
- [ScrollProductByFilterRequestScrollProductFilterTimeRangeConditionDTO](docs/Model/ScrollProductByFilterRequestScrollProductFilterTimeRangeConditionDTO.md)
- [ScrollShortProductByFilterResponseMarketingImage](docs/Model/ScrollShortProductByFilterResponseMarketingImage.md)

## Authorization

### X-Auth-Token

- **Type**: API key
- **API key parameter name**: X-Auth-Token
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
