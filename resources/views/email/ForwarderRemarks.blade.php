@component('mail::message')

{{$application_forms['Applicant_Name']}} , <br>
Your Application Form for InnerLine Pass with Application No= {{$application_forms['Application_No']}} has been rejected because {{$application_forms['Remarks_from_Forworder']}}



Thanks,<br>
{{ config('app.name') }}
@endcomponent
