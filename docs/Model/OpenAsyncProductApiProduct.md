# # OpenAsyncProductApiProduct

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**language** | **string** | Основной язык товара |
**product_unit** | **int** | Единица измерения товара. Наиболее часто используются штуки (100000015), упаковки (100000014) и комплект (100000017) | [optional]
**multi_language_description_list** | [**\OpenAPI\Client\Model\OpenAsyncProductApiSingleLanguageDescriptionDto[]**](OpenAsyncProductApiSingleLanguageDescriptionDto.md) | Список названий товара на нескольких языках |
**multi_language_subject_list** | [**\OpenAPI\Client\Model\OpenAsyncProductApiSingleLanguageTitleDto[]**](OpenAsyncProductApiSingleLanguageTitleDto.md) | Список описаний товара на нескольких языках |
**aliexpress_category_id** | **string** | Идентификатор категории нижнего уровня |
**brand_name** | **string** | Название бренда. Этот параметр нужно передать или отдельно, или внутри объекта attribute_list, aliexpress_attribute_name_id &#x3D; 2. Если бренда нет, передайте None. Можно передавать только бренды, которые вы добавили в свой магазин |
**main_image_urls_list** | **string[]** | Массив ссылок на основные изображения товара. Все ссылки должны быть прямыми, то есть вести на изображение на вашем сервере или на CDN AliExpress |
**sku_info_list** | [**\OpenAPI\Client\Model\OpenAsyncProductApiSkuInfoDto[]**](OpenAsyncProductApiSkuInfoDto.md) | Содержит три обязательных параметра: * inventory (остаток товара на складе от 1 до 999999), * price (цена товара от 0,01 до 999999), * sku_code (идентификатор экземпляра: артикул или штрихкод) И ряд необязательных: discount_price, bar_code (штрихкод, обязательно для продавцов, работающих по модели Фулфилмент «Цайняо»), sku_attributes_list (список полей sku_attribute_name, sku_attribute_value и sku_image_url) |
**attribute_list** | [**\OpenAPI\Client\Model\OpenAsyncProductApiAttributeDto[]**](OpenAsyncProductApiAttributeDto.md) | Список ключей и значений атрибутов товара. * attribute_name, string (название нового атрибута) * attribute_value, string (новое значение атрибута) * attribute_name_id, int (существующее в системе название атрибута) * attribute_value_id, int (существующее в системе значение атрибута) |
**inventory_deduction_strategy** | **string** | В какой момент будет вычитаться остаток товара: в момент оплаты (payment_success_deduct) или в момент совершения заказа place_order_withhold) |
**weight** | **string** | Вес товара в упаковке (используется для расчёта доставки). Может принимать значение от 0,001 до 500 килограммов |
**package_length** | **int** | Длина упаковки в сантиметрах. Может принимать значение от 1 до 700 сантиметров |
**package_height** | **int** | Высота упаковки в сантиметрах. Может принимать значение от 1 до 700 сантиметров |
**package_width** | **int** | Ширина упаковки в сантиметрах. Может принимать значение от 1 до 700 сантиметров |
**freight_template_id** | **string** | Идентификатор шаблона доставки, уникален для каждого продавца или шаблона |
**size_chart_id** | **string** | Идентификатор таблицы размеров. Нужен для одежды, обуви, аксессуаров и белья | [optional]
**shipping_lead_time** | **string** | Время на отправку заказа (время, за которое вы обязуетесь ввести трек-номер) |
**service_policy_id** | **string** | Идентификатор шаблон услуг, описывающего условия возврата. id &#x3D; 0 соответствует шаблону по умолчанию: Service Template for New Sellers |
**ae_group_ids** | **string[]** | Идентификатор группы товаров | [optional]
**package_type** | **bool** | Метод продаж. false - поштучно, true - лотами | [optional]
**lot_num** | **string** | Количество твоара в лоте | [optional]
**gtin** | **string** |  | [optional]
**tnved_codes** | **string[]** |  | [optional]
**okpd2_codes** | **string[]** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
