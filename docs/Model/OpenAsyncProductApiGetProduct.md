# # OpenAsyncProductApiGetProduct

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**ali_created_at** | **\DateTime** |  | [optional]
**ali_updated_at** | **\DateTime** |  | [optional]
**owner_member_id** | **string** | логин, создавшего продукт | [optional]
**owner_member_seq** | **string** | ID, создавшего продукт | [optional]
**bulk_discount** | **string** |  | [optional]
**bulk_order** | **string** |  | [optional]
**base_unit** | **string** |  | [optional]
**add_unit** | **string** | Индивидуальная настройка веса посылки | [optional]
**add_weight** | **float** | Индивидуальная настройка веса посылки | [optional]
**category_id** | **string** |  | [optional]
**currency_code** | **string** |  | [optional]
**delivery_time** | **string** |  | [optional]
**freight_template_id** | **string** | Идентификатор шаблона доставки, уникален для каждого продавца или шаблона | [optional]
**package_height** | **string** |  | [optional]
**package_length** | **string** |  | [optional]
**package_width** | **string** |  | [optional]
**lot_num** | **string** | Значение количества в упаковке | [optional]
**price** | **string** | Цена | [optional]
**property** | [**\OpenAPI\Client\Model\GetProductProperty[]**](GetProductProperty.md) |  | [optional]
**status_type** | **string** | Статус товара | [optional]
**unit** | **string** |  | [optional]
**promise_template_id** | **string** | Шаблон возвратова (по умолчанию 0 - это системный шаблон возвратов) | [optional]
**product_reduce_strategy** | **string** | Вычет запасов | [optional]
**gross_weight** | **float** | Вес в упаковке | [optional]
**sizechart_id** | **string** | Таблица размеров | [optional]
**package_type** | **bool** | Значение метода продаж (true - Лотами, false - Поштучно) | [optional]
**descriptions** | [**\OpenAPI\Client\Model\GetProductDescription[]**](GetProductDescription.md) |  | [optional]
**groups** | [**\OpenAPI\Client\Model\GetProductGroup[]**](GetProductGroup.md) | ID групп продуктов | [optional]
**media** | [**\OpenAPI\Client\Model\GetProductMedia[]**](GetProductMedia.md) |  | [optional]
**sku** | [**\OpenAPI\Client\Model\GetProductSKU[]**](GetProductSKU.md) |  | [optional]
**subject** | [**\OpenAPI\Client\Model\GetProductSubject[]**](GetProductSubject.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
