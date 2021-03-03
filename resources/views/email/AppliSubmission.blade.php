@component('mail::message')
# Thank You

{{$application_forms['Application_Name']}} ,
Your  Application Form has been successfully Submitted with application No.= {{$application_forms['Application_No']}}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
