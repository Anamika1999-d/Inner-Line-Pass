@component('mail::message')

{{$application_forms['Applicant_Name']}}, <br>
Your Application Form with Application No - {{$application_forms['Application_No']}} has been accepted. Your InnerLine pass has been issued .You can either download the form from the website or reach out to any CSC center to get your InnerLine Pass 

Thanks,<br>
{{ config('app.name') }}
@endcomponent
