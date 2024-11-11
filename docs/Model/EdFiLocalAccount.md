# # EdFiLocalAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**account_identifier** | **string** | Code value for the valid combination of account dimensions by LEA under which financials are reported. |
**fiscal_year** | **int** | The fiscal year for the account. |
**chart_of_account_reference** | [**\Resources\Model\EdFiChartOfAccountReference**](EdFiChartOfAccountReference.md) |  |
**education_organization_reference** | [**\Resources\Model\EdFiEducationOrganizationReference**](EdFiEducationOrganizationReference.md) |  |
**account_name** | **string** | A descriptive name for the account. | [optional]
**reporting_tags** | [**\Resources\Model\EdFiLocalAccountReportingTag[]**](EdFiLocalAccountReportingTag.md) | An unordered collection of localAccountReportingTags. Optional tag for accountability reporting. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
