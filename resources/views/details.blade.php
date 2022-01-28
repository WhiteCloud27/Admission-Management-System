<div class="formDesign"style="width:50%; margin:auto; margin-top:100px; " >

<table>

@foreach ($data as $item)
<tr>
    <td style=" font-size:50px;">
    Your Marks: 
    {{$item->mark}}
    </td>
</tr>
<tr>
    <td style=" font-size:50px;">
    Your Position:
    {{$item->position}}
    </td>

</tr>


@endforeach
</table>

</div>