# # GetProductsByIDDataResponseProduct

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор продукта | [optional]
**ali_created_at** | [**\DateTime**](\DateTime.md) | Время создания | [optional]
**ali_updated_at** | [**\DateTime**](\DateTime.md) | Время обновления | [optional]
**owner_member_id** | **string** | логин, создавшего продукт | [optional]
**owner_member_seq** | **string** | ID, создавшего продукт | [optional]
**bulk_discount** | **string** |  | [optional]
**bulk_order** | **string** |  | [optional]
**base_unit** | **string** | Базовая единица | [optional]
**add_unit** | **string** |  | [optional]
**add_weight** | **float** |  | [optional]
**category_id** | **string** | Индентификатор категории | [optional]
**currency_code** | **string** | Код валюты | [optional]
**delivery_time** | **string** | Время доставки | [optional]
**freight_template_id** | **string** | Идентификатор шаблона доставки, уникален для каждого продавца или шаблона | [optional]
**package_height** | **string** | Высота упаковки | [optional]
**package_length** | **string** | Длина упаковки | [optional]
**package_width** | **string** | Ширина упаковки | [optional]
**lot_num** | **string** |  | [optional]
**price** | **string** | Цена | [optional]
**property** | [**\OpenAPI\Client\Model\OpenAsyncProductApiGetProductsByIDDataProperty[]**](OpenAsyncProductApiGetProductsByIDDataProperty.md) | Свойства товара | [optional]
**status_type** | **string** |  | [optional]
**unit** | **string** | Единица измерения | [optional]
**promise_template_id** | **string** |  | [optional]
**product_reduce_strategy** | **string** | Вычет запасов | [optional]
**gross_weight** | **float** | Вес в упаковке | [optional]
**sizechart_id** | **string** | Таблица размеров | [optional]
**package_type** | **bool** | Значение метода продаж (true - Лотами, false - Поштучно) | [optional]
**descriptions** | [**\OpenAPI\Client\Model\OpenAsyncProductApiGetProductsByIDDataDescription[]**](OpenAsyncProductApiGetProductsByIDDataDescription.md) | Описания товара | [optional]
**groups** | [**\OpenAPI\Client\Model\OpenAsyncProductApiGetProductsByIDDataGroup[]**](OpenAsyncProductApiGetProductsByIDDataGroup.md) |  | [optional]
**media** | [**\OpenAPI\Client\Model\OpenAsyncProductApiGetProductsByIDDataMedia[]**](OpenAsyncProductApiGetProductsByIDDataMedia.md) | Картинки/Видео | [optional]
**sku** | [**\OpenAPI\Client\Model\OpenAsyncProductApiGetProductsByIDDataSKU[]**](OpenAsyncProductApiGetProductsByIDDataSKU.md) | Атрибуты | [optional]
**subject** | [**\OpenAPI\Client\Model\OpenAsyncProductApiGetProductsByIDDataSubject[]**](OpenAsyncProductApiGetProductsByIDDataSubject.md) | Основное название | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
