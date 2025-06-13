# # EdFiStudentTransportationStudentBusDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bus_route_descriptor** | **string** | Identifies the specific route taken by a bus for student transportation. |
**bus_number** | **string** | The unique identifier assigned to the bus used for transporting the student. |
**mileage** | **float** | The distance, typically measured in miles, that a student was transported along the route of the bus during a single trip. | [optional]
**travel_dayof_weeks** | [**\Resources\Model\EdFiStudentTransportationStudentBusDetailsTravelDayofWeek[]**](EdFiStudentTransportationStudentBusDetailsTravelDayofWeek.md) | An unordered collection of studentTransportationStudentBusDetailsTravelDayofWeeks. Specifies the day(s) of the week on which student transportation occurs. | [optional]
**travel_directions** | [**\Resources\Model\EdFiStudentTransportationStudentBusDetailsTravelDirection[]**](EdFiStudentTransportationStudentBusDetailsTravelDirection.md) | An unordered collection of studentTransportationStudentBusDetailsTravelDirections. Indicates the direction of travel for the student transportation route (e.g., to school, from school). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
