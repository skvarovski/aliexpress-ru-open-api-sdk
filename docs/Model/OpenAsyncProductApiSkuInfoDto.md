# # OpenAsyncProductApiSkuInfoDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**inventory** | **string** | Остаток товара на складе от 1 до 999999 |
**price** | **float** | Цена товара от 0,01 до 999999 |
**discount_price** | **float** | Цена товара со скидкой | [optional]
**sku_code** | **string** | Идентификатор экземпляра: артикул или штрихкод |
**bar_code** | **string** | Штрихкод: обязательно для продавцов, работающих по модели Фулфилмент «Цайняо» | [optional]
**sku_attributes_list** | [**\OpenAPI\Client\Model\OpenAsyncProductApiSkuAttributesDto[]**](OpenAsyncProductApiSkuAttributesDto.md) | Список sku атрибутов | [optional]
**gtin** | **string** |  | [optional]
**tnved_codes** | **string[]** |  | [optional]
**okpd2_codes** | **string[]** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
