<!DOCTYPE html>
<html>
<body >

    
<div class="formDesign"style="width:50%; margin:auto; " >
<h1 style="text-align:center;">Your Information</h1>
    <div class="table-responsive"style="float:left ; width:70%">
    <table class="table">
        <tr> <td> <strong> Your Name    </strong>   </td>
            <td>:    {{$req->firstName}} {{$req->lastName}} </h3></td>
        </tr>
        <tr> <td><strong> Father's Name   </strong></td>
            <td>:            {{$req->fatherName}} </h3></td>
        </tr>
        <tr> <td> <strong>Date of Birth </strong> </td>
            <td>: {{$req->dateofBirth}} </h3></td>
        </tr>
        <tr> <td><strong> Gender  </strong> </td>
            <td>: {{$req->gender}} </h3></td>
        </tr>
        <tr> <td><strong> HSC Passing Year  </strong>  </td>
            <td>: {{$req->hscYear}} </h3></td>
        </tr>
        <tr> <td><strong> HSC Board </strong></td>
            <td>: {{$req->hscBoard}} </h3></td>
        </tr>
        <tr> <td><strong> HSC Reg No. </strong>  </td>
            <td>: {{$req->hscReg}} </h3></td>
        </tr>
        <tr> <td><strong> HSC Roll No. </strong>  </td>
            <td>: {{$req->hscRoll}} </h3></td>
        </tr>
      
        <tr> <td><strong> SSC Passing Year  </strong>   </td>
            <td>: {{$req->sscYear}} </h3></td>
        </tr>
        <tr> <td><strong> SSC Board </strong></td>
            <td>: {{$req->sscBoard}} </h3></td>
        </tr>
        <tr> <td><strong> SSC Reg No. </strong> </td>
            <td>: {{$req->sscReg}} </h3></td>
        </tr>
        <tr> <td><strong> SSC Roll No. </strong>  </td>
            <td>: {{$req->sscRoll}} </h3></td>
        </tr>
       

        <tr> <td><strong> Present Village </strong>   </td>
            <td>: {{$req->presentVillage}} </h3></td>
        </tr>
        <tr> <td><strong> Present Union</strong> </td>
            <td>: {{$req->presentUnion}} </h3></td>
        </tr>
        <tr> <td><strong> Present Post Office </strong> </td>
            <td>: {{$req->presentPostOffice}} </h3></td>
        </tr>
        <tr> <td><strong> Present Thana </strong>  </td>
            <td>: {{$req->presentThana}} </h3></td>
        </tr>
        <tr> <td><strong>Present District </strong> </td>
            <td>: {{$req->presentDistrict}} </h3></td>
        </tr>

        <tr> <td><strong> Permanent Village </strong>  </td>
            <td>: {{$req->permanentVillage}} </h3></td>
        </tr>
        <tr> <td><strong> Permanent Union </strong></td>
            <td>: {{$req->permanentUnion}} </h3></td>
        </tr>
        <tr> <td><strong>Permanent Post Office </strong></td>
            <td>: {{$req->permanentPostOffice}} </h3></td>
        </tr>
        <tr> <td><strong> Permanent Thana </strong></td>
            <td>: {{$req->permanentThana}} </h3></td>
        </tr>
        <tr> <td><strong>Permanent District </strong></td>
            <td>: {{$req->permanentDistrict}} </h3></td>
        </tr>
        <tr> <td><strong>Email </strong></td>
            <td>: {{$req->email}} </h3></td>
        </tr>
        <tr> <td><strong>Phone No</strong> </td>
            <td>: {{$req->phoneNo}} </h3></td>
        </tr>

    </table>
    </div>
    <div >
    <div class="design"style="float:left">
    <br>
    <br>
        <img src="{{ asset('uploads/students/'.$req->profileImage) }}" width="100px" height="100px">
        <h3>Your Image</h3>
        <br>
        <br>

        <img src="{{ asset('uploads/aplicants/'.$req->signatureImage) }}" width="100px" height="100px">
        <h3>Your Signature</h3>
    </div>
</div>
</div>
</body>
</html>

