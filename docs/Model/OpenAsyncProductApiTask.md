# # OpenAsyncProductApiTask

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор задания на создание/обновление продукта | [optional]
**group_id** | **string** | Идентификатор группы заданий на создание/обновление продукта | [optional]
**action** | **int** | Тип задачния (1 - создание; 2 - обноление) | [optional]
**status** | **int** | Статус задания на создание/обновление продукта (1 - создано; 2 - обрабатывается; 3 - успех; 4 - ошибка) | [optional]
**product_id** | **string** | Идентификатор продукта | [optional]
**sku_codes** | **string[]** | sku кода продукта (в случае задания на создание продукта) | [optional]
**error** | [**\OpenAPI\Client\Model\OpenAsyncProductApiTaskError**](OpenAsyncProductApiTaskError.md) |  | [optional]
**created_at** | **\DateTime** | Время создания задания на создание/обновление продукта | [optional]
**updated_at** | **\DateTime** | Время последкнего обновления задания на создание/обновление продукта | [optional]
**warnings** | **string[]** | Некритичные ошибки, возникшие в процессе выполнения задач | [optional]
**batch_results** | [**array<string,\OpenAPI\Client\Model\OpenAsyncProductApiBatchItemResult>**](OpenAsyncProductApiBatchItemResult.md) | Результат пакетных операций | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
