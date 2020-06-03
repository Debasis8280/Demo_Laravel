@component('mail::message')
# Introduction

The body of your message.
@php
    $url=url("show");
@endphp
@component('mail::button', ['url' => $url,'color'=>'success'])
OK
@endcomponent
@component('mail::panel')
hello Iam Debasis
@endcomponent

@component('mail::table')
    <table>
        <tr>
            <th>name</th>
        </tr>
        <tr>
            <td>
                Deasis
            </td>
        </tr>
    </table>
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
