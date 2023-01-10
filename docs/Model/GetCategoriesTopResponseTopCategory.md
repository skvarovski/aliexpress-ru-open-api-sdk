# # GetCategoriesTopResponseTopCategory

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Индентификатор категории на AliExpress | [optional]
**name** | **string** | Название категории | [optional]
**children_ids** | **string[]** | Идентификаторы дочерних категорий. Если массив пуст, это категория самого низкого уровня. В ней можно создать товар. | [optional]
**is_visible** | **bool** | Является ли категория активной на AliExpress. | [optional]
**sku_properties** | [**\OpenAPI\Client\Model\ScopenAsyncProductApiProperty[]**](ScopenAsyncProductApiProperty.md) | Атрибуты артикула (SKU). | [optional]
**properties** | [**\OpenAPI\Client\Model\ScopenAsyncProductApiProperty[]**](ScopenAsyncProductApiProperty.md) | Атрибуты категории. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
