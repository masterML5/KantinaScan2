<?php include('connection.php');?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/af-2.3.7/date-1.1.0/r-2.2.9/rg-1.1.3/sc-2.0.4/sp-1.3.0/datatables.min.css"/>
  <title>Kantina Statistika</title>
  <style type="text/css">
    .btnAdd {
      text-align: right;
      width: 83%;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <h2 class="text-center">Statistika</h2>
    <p class="datatable design text-center">Obroka u kantini</p>
    <a href="../index.php" class="btn btn-danger">Povratak nazad</a>
    <div class="row">
      <div class="container">
        <div class="btnAdd">
         <a href="#!" data-id="" data-bs-toggle="modal" data-bs-target="#addUserModal"   class="btn btn-success btn-sm" >Dodaj ručno obrok</a>
       </div>
       <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
         <table id="example" class="table">
          <thead>
            <th>Id</th>
            <th>Ime Prezime</th>
            <th>Broj kartice</th>
            <th>Datum</th>
            <th>Vrsta obroka</th>
            <th>Options</th>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
</div>
</div>
<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/af-2.3.7/date-1.1.0/r-2.2.9/rg-1.1.3/sc-2.0.4/sp-1.3.0/datatables.min.js"></script>
 <!--Option 2: Separate Popper and Bootstrap JS -->
 <script src="https://unpkg.com/tableexport.jquery.plugin/tableExport.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table-locale-all.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  
  <script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable({
        "fnCreatedRow": function( nRow, aData, iDataIndex ) {
          $(nRow).attr('id', aData[0]);
        },
        'serverSide':'true',
        'processing':'true',
        'paging':'true',
        'order':[],
        'ajax': {
          'url':'fetch_data.php',
          'type':'post',
        },
        
       
        "columnDefs": [{
          'target':[5],
          'orderable' :false,
        }],

        /* dom: 'Qfrtip' */
      });
    });
    $(document).ready(function () {

function load() {
    $.ajax({ //create an ajax request to load_page.php
        type: "GET",
        url: "fetch_data.php",
        dataType: "html", //expect html to be returned                
        success: function (response) {
            $("#responsecontainer").html(response);
            setTimeout(load, 5000)
        }
    });
}

load(); //if you don't want the click
/* $("#display").click(load); //if you want to start the display on click */
});
    $(document).on('submit','#addUser',function(e){
      e.preventDefault();
      var vrsta_obroka= $('#addMealField').val();
      var ime_prezime= $('#addUserField').val();
      var datum= $('#addDateField').val();
      var broj_kartice= $('#addCardField').val();
      if(vrsta_obroka != '' && ime_prezime != '' && datum != '' && broj_kartice != '' )
      {
       $.ajax({
         url:"add_user.php",
         type:"post",
         data:{vrsta_obroka:vrsta_obroka,ime_prezime:ime_prezime,datum:datum,broj_kartice:broj_kartice},
         success:function(data)
         {
           var json = JSON.parse(data);
           var status = json.status;
           if(status=='true')
           {
            mytable =$('#example').DataTable();
            mytable.draw();
            $('#addUserModal').modal('hide');
          }
          else
          {
            alert('failed');
          }
        }
      });
     }
     else {
      alert('Fill all the required fields');
    }
  });
    $(document).on('submit','#updateUser',function(e){
      e.preventDefault();
       //var tr = $(this).closest('tr');
       var vrsta_obroka= $('#mealField').val();
       var ime_prezime= $('#nameField').val();
       var datum= $('#dateField').val();
       var broj_kartice= $('#cardField').val();
       var trid= $('#trid').val();
       var id= $('#id').val();
       if(vrsta_obroka != '' && ime_prezime != '' && datum != '' && broj_kartice != '' )
       {
         $.ajax({
           url:"update_user.php",
           type:"post",
           data:{vrsta_obroka:vrsta_obroka,ime_prezime:ime_prezime,datum:datum,broj_kartice:broj_kartice,id:id},
           success:function(data)
           {
             var json = JSON.parse(data);
             var status = json.status;
             console.log(status);
             if(status=='true')
             {
              table =$('#example').DataTable();
              // table.cell(parseInt(trid) - 1,0).data(id);
              // table.cell(parseInt(trid) - 1,1).data(ime_prezime);
              // table.cell(parseInt(trid) - 1,2).data(broj_kartice);
              // table.cell(parseInt(trid) - 1,3).data(datum);
              // table.cell(parseInt(trid) - 1,4).data(vrsta_obroka);
              var button =   '<td><a href="javascript:void();" data-id="' +id + '" class="btn btn-info btn-sm editbtn">Izmeni</a>  <a href="#!" data-bs-toggle="modal" data-id="' +id + '" data-bs-target="#exampleModal" class="btn btn-danger btn-sm">Izbriši</a></td>';
              var row = table.row("[id='"+trid+"']");
              row.row("[id='" + trid + "']").data([id,ime_prezime,broj_kartice,datum,vrsta_obroka,button]);
              $('#exampleModal').modal('hide');
            }
            else
            {
              alert('failed');
            }
          }
        });
       }
       else {
        alert('Fill all the required fields');
      }
    });
    $('#example').on('click','.editbtn ',function(event){
      var table = $('#example').DataTable();
      var trid = $(this).closest('tr').attr('id');
     // console.log(selectedRow);
     var id = $(this).data('id');
     $('#exampleModal').modal('show');

     $.ajax({
      url:"get_single_data.php",
      data:{id:id},
      type:'post',
      success:function(data)
      {
       var json = JSON.parse(data);
       $('#nameField').val(json.ime_prezime);
       $('#cardField').val(json.broj_kartice);
       $('#dateField').val(json.datum);
       $('#mealField').val(json.vrsta_obroka);
       $('#id').val(id);
       $('#trid').val(trid);
     }
   })
   });

    $(document).on('click','.deleteBtn',function(event){
       var table = $('#example').DataTable();
      event.preventDefault();
      var id = $(this).data('id');
      if(confirm("Da li ste sigurni da želite da obrišete obrok ? "))
      {
      $.ajax({
        url:"delete_user.php",
        data:{id:id},
        type:"post",
        success:function(data)
        {
          var json = JSON.parse(data);
          status = json.status;
          if(status=='success')
          {
            //table.fnDeleteRow( table.$('#' + id)[0] );
             //$("#example tbody").find(id).remove();
             //table.row($(this).closest("tr")) .remove();
             $("#"+id).closest('tr').remove();
          }
          else
          {
            alert('Failed');
            return;
          }
        }
      });
      }
      else
      {
        return null;
      }



    })

 </script>
 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Izmeni obrok</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="updateUser" >
          <input type="hidden" name="id" id="id" value="">
          <input type="hidden" name="trid" id="trid" value="">
          <div class="mb-3 row">
            <label for="nameField" class="col-md-3 form-label">Ime Prezime</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="nameField" name="name" >
            </div>
          </div>
          <div class="mb-3 row">
            <label for="cardField" class="col-md-3 form-label">Broj kartice</label>
            <div class="col-md-9">
              <input type="number" class="form-control" id="cardField" name="email">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="dateField" class="col-md-3 form-label">Datum</label>
            <div class="col-md-9">
              <input type="date" class="form-control" id="dateField" name="mobile">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="mealField" class="col-md-3 form-label">Vrsta obroka</label>
            <div class="col-md-9">
            <select name="vrsta_obroka" id="mealField">
              <option value="hladan obrok" name="hladan obrok">Hladan obrok</option>
              <option value="topli obrok" name="topli obrok">Topli obrok</option>
  </select>
            </div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Dodaj</button>
          </div>
        </form> 
      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
      </div>
    </div>
  </div>
</div>
<!-- Add user Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Dodaj ručno obrok</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="addUser" action="">
          <div class="mb-3 row">
            <label for="addUserField" class="col-md-3 form-label">Ime Prezime</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="addUserField" name="name" >
            </div>
          </div>
          <div class="mb-3 row">
            <label for="addCardField" class="col-md-3 form-label">Broj kartice</label>
            <div class="col-md-9">
              <input type="number" class="form-control" id="addCardField" name="email">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="addDateField" class="col-md-3 form-label">Datum</label>
            <div class="col-md-9">
              <input type="date" class="form-control" id="addDateField" name="mobile">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="addMealField" class="col-md-3 form-label">Vrsta obroka</label>
            <div class="col-md-9">
            <select name="vrsta_obroka" id="addMealField">
              <option value="hladan obrok" name="hladan obrok">Hladan obrok</option>
              <option value="topli obrok" name="topli obrok">Topli obrok</option>
                </select>
            </div>
          </div>
          <div class="text-center">
            <button type="submit"  class="btn btn-primary" onClick="window.location.reload();">Dodaj</button>
            <input onclick="clear_form_elements(this.form)" type="button" value="Clear All" />
           
          
          </div>
        </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<script type="text/javascript">
  //var table = $('#example').DataTable();
</script>
