<table class="table">
    <tbody>
        <tr>
            <td class="col-3 col-lg-2"><b>Name :</b>
            <td>
                {{$admin->nama}}
            </td>
        </tr>
        <tr>
            <td class="col-3 col-lg-2"><b>Adress :</b>
            <td>
                {{$admin->alamat}}
            </td>
        </tr>
        <tr>
            <td class="col-3 col-lg-2"><b>Email :</b>
            <td> 
                {{$admin->user->email}}
            </td>
       </tr>
    </tbody>
</table>