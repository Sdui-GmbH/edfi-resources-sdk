# # EdFiChartOfAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**account_identifier** | **string** | SEA populated code value for the valid combination of account dimensions under which financials are reported. |
**fiscal_year** | **int** | The fiscal year for the account |
**balance_sheet_dimension_reference** | [**\Resources\Model\EdFiBalanceSheetDimensionReference**](EdFiBalanceSheetDimensionReference.md) |  | [optional]
**education_organization_reference** | [**\Resources\Model\EdFiEducationOrganizationReference**](EdFiEducationOrganizationReference.md) |  |
**function_dimension_reference** | [**\Resources\Model\EdFiFunctionDimensionReference**](EdFiFunctionDimensionReference.md) |  | [optional]
**fund_dimension_reference** | [**\Resources\Model\EdFiFundDimensionReference**](EdFiFundDimensionReference.md) |  | [optional]
**object_dimension_reference** | [**\Resources\Model\EdFiObjectDimensionReference**](EdFiObjectDimensionReference.md) |  | [optional]
**operational_unit_dimension_reference** | [**\Resources\Model\EdFiOperationalUnitDimensionReference**](EdFiOperationalUnitDimensionReference.md) |  | [optional]
**program_dimension_reference** | [**\Resources\Model\EdFiProgramDimensionReference**](EdFiProgramDimensionReference.md) |  | [optional]
**project_dimension_reference** | [**\Resources\Model\EdFiProjectDimensionReference**](EdFiProjectDimensionReference.md) |  | [optional]
**source_dimension_reference** | [**\Resources\Model\EdFiSourceDimensionReference**](EdFiSourceDimensionReference.md) |  | [optional]
**account_name** | **string** | A descriptive name for the account. | [optional]
**account_type_descriptor** | **string** | The type of account used in accounting such as revenue, expenditure, or balance sheet. |
**reporting_tags** | [**\Resources\Model\EdFiChartOfAccountReportingTag[]**](EdFiChartOfAccountReportingTag.md) | An unordered collection of chartOfAccountReportingTags. Optional tag for accountability reporting. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
