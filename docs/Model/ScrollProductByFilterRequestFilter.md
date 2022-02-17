# # ScrollProductByFilterRequestFilter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**top_category_ids** | **string[]** | Категория верхнего уровня | [optional]
**leaf_category_ids** | **string[]** | Категория, не имеющая подкатегорий | [optional]
**owner_id** | **string** | ID владельца продукта | [optional]
**shipping_template_ids** | **string[]** | Список шаблонов доставки | [optional]
**status** | **string** | Статус товара | [optional]
**group_ids** | **string[]** | ID групп продуктов | [optional]
**has_quantity** | **bool** | В наличии | [optional]
**search_content** | [**\OpenAPI\Client\Model\ScrollProductByFilterRequestScrollProductFilterSearchContentDTO**](ScrollProductByFilterRequestScrollProductFilterSearchContentDTO.md) |  | [optional]
**time_range_condition** | [**\OpenAPI\Client\Model\ScrollProductByFilterRequestScrollProductFilterTimeRangeConditionDTO**](ScrollProductByFilterRequestScrollProductFilterTimeRangeConditionDTO.md) |  | [optional]
**offline_reason** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
