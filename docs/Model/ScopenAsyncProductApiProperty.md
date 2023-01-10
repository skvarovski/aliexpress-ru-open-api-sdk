# # ScopenAsyncProductApiProperty

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор атрибута. | [optional]
**name** | **string** | Название атрибута. | [optional]
**is_required** | **bool** | Атрибут является обязательным. | [optional]
**is_key** | **bool** | Является ли ключевым атрибутом. Это значит, что его рекомендуется заполнить, так как он может влиять на выдачу в поиске и фильтры. | [optional]
**is_brand** | **bool** | Является ли атрибут брендом. | [optional]
**is_enum_prop** | **bool** | Является ли атрибут справочным. | [optional]
**is_multi_select** | **bool** | Можно ли выбрать несколько значений атрибута. | [optional]
**is_input_prop** | **bool** | Является ли значение атрибута произвольным. | [optional]
**has_unit** | **bool** | Есть единица измерения. | [optional]
**has_customized_pic** | **bool** | Есть произвольное изображение. | [optional]
**has_customized_name** | **bool** | Может ли название быть произвольным. | [optional]
**units** | [**\OpenAPI\Client\Model\OpenAsyncProductApiUnit[]**](OpenAsyncProductApiUnit.md) | Массив единиц измерения атрибута (для числовых). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
