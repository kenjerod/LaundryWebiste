let searchs = document.getElementById("search");
searchs.addEventListener("input", myFunction);
searchs.addEventListener("keydown", myFunction2);

function myFunction() {
   
        document.getElementById("searchLogo").style.opacity = 0;
}
function myFunction2() {
        document.getElementById("searchLogo").style.opacity = .7; 
}


let change = document.getElementById("change");
change.addEventListener("click", addChange);

function addChange()
{
        document.getElementById("formCon").style.display = "block";
}

let cancel = document.getElementById("cancel");

cancel.addEventListener("click", cancelTab);

function cancelTab()
{
        document.getElementById("formCon").style.display = "none";
}


let add = document.getElementById("add");

add.addEventListener("click", addForm);

function addForm()
{
        document.getElementById("fca").style.display = "block";
        document.getElementById("closeForm").style.display = "none";
}


let cancel2 = document.getElementById("cancel2");

cancel2.addEventListener("click", cancelTab1);

function cancelTab1()
{
        document.getElementById("fca").style.display = "none";
        document.getElementById("closeForm").style.display = "block";
}

//disable  button//

document.addEventListener('DOMContentLoaded', function() {
        var p = document.querySelector('#value');
        var button = document.querySelector('#add');
        if (p.textContent.trim() !== '') {
          button.disabled = true;
        button.style.display = 'none'; 
        }
      });

let edit = document.getElementById("edit");
edit.addEventListener("click", editForm);

function editForm()
{
        document.getElementById("fcedit").style.display = "block";
        document.getElementById("closeForm").style.display = "none";
}


let cancelEdit = document.getElementById("cancel2Edit");

cancelEdit.addEventListener("click", cancelTab2);

function cancelTab2()
{
        document.getElementById("fcedit").style.display = "none";
        document.getElementById("closeForm").style.display = "block";
}

let type = document.getElementById("typeClean");

type.addEventListener("click", typeProd);

function typeProd()
{
        document.getElementById("formConProd").style.display = "block";
}


let cancelP = document.getElementById("cancelProducts");

cancelP.addEventListener("click", cancelProd);

function cancelProd()
{
        document.getElementById("formConProd").style.display = "none";      
}





