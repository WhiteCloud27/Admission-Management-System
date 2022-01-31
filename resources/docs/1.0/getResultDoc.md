# Get result

---

- [First Section](#section-1)

<a name="section-1"></a>
- [Description](#section-1)
- [Active Controllers](#section-2)
- [Functions](#section-3)
- [Views-Route](#section-4)
- [Models](#section-5)
 
<a name="section-2"></a>
 
## Description
 
Here we implement the result feature where admin can update result and user can get result.
 
 
<a name="section-2"></a>
 
## Active Controllers
 
1. AdminResultController.php
 
<a name="section-3"></a>
 
## Methods
 
1. `setResult() : Returns void; Through this function admin can set result`
 
```php
function setResult( Request $request)
    {
 
    }
```
 
2. `getResult() : Returns view of 'userDetails';User can get result through this method`
 
```php
function  getResult(Request $request)
    {    
        return view('details',['data'=>$data]);
    }
```
 
 
<a name="section-4"></a>
 
## Views-Route
 
| # | Request type   | Path |  Action | Route Name |
| : |   :-   |  :  | : | : |
| 1 | GET | /candidate  | getResult | candidate |
| 2 | POST  | /admin  | setResult | admins |
 
 
<a name="section-5"></a>
 
## Models
 
> {success} Class Get_result : Handles the logic behind setting get result.<br>
