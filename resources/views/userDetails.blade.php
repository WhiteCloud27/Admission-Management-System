<div class="formDesign"style="width:50%; margin:auto; margin-top:100px; " >

<table>

@foreach ($data as $item)
<tr>
    <td style=" font-size:40px;">
    Your institution: 
    {{$item->institution}}
    </td>
</tr>
<tr>
    <td style=" font-size:40px;">
    Your roomNo:
    {{$item->roomNo}}
    </td>

</tr>
<tr>
    <td style=" font-size:40px;">
    Your Exam Time:
    {{$item->examTime}}
    </td>

</tr>


@endforeach
</table>

</div>