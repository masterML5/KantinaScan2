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
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <title>Kantina Statistika</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container-fluid">
    <h2 class="text-center">Evidencija obroka u kantini</h2>
    <p class="datatable design text-center">Izvestaji i izmene obroka</p>
    <a href="../index.php" class="btn btn-danger">Povratak nazad</a>
    <div class="row">
      <div class="container">
        <form>
          <div class="form-group">
        <div class="filters">
      
        <div class="datumi">
          <p>Filtriraj podatke za radnika :</p>
          <div class="ime_radnika">
          <label for="ime_radnika" class="ime_radnika_label" >Ime radnika :</label>
          <select class="form-control mb-3 js-example-basic-multiple" id="ime_radnika" name="ime_radnika" >
                            
                                
                            <?php
                            require('../connection.php');
                            $query = "SELECT * FROM users";
                            $query_run = mysqli_query($con, $query);
                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $row){
                                    ?>
                                    <option selected="selected"></option>
                                    <option value="<?= $row['ime_prezime'];?>"><?= $row['ime_prezime'];?></option>
                                    <?php
                                }
                            }
                            else
                            {
                                ?>
                                <option value="">Nema obroka!</option>
                                <?php
                            }
                            ?>
            </select>
            </div>
          
        </div>
        <div class="datumi">
          <p>Filtriraj podatke za datum :</p>
          <label for="datum_od">Datum od:</label>
          <input type="date" name="datum_od" id="datum_od" >
          <label for="datum_do">Datum do:</label>
          <input type="date" name="datum_do"  id="datum_do" ><br>
          <button type="button" name="filter" id="filter" class="btn btn-info">Pretraži</button>
          <button type="button" name="reset" id="reset" onClick="window.location.reload();" class="btn btn-danger">Poništi</button>

    
        </div>
        <div class="datumi">
          <p>Filtriraj podatke za ime jela :</p>
          <div class="ime_radnika">
          <label for="ime_radnika" class="ime_radnika_label" >Obrok :</label>
          <select class="form-control mb-3 js-example-basic-multiple"  id="obrok" name="obrok" >
                            
                                
                            <?php
                            require('../connection.php');
                            $query = "SELECT * FROM obroci";
                            $query_run = mysqli_query($con, $query);
                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $row){
                                    ?>
                                    <option selected="selected"></option>
                                    <option value="<?= $row['ime_obroka'];?>"><?= $row['ime_obroka'];?></option>
                                    <?php
                                }
                            }
                            else
                            {
                                ?>
                                <option value="">Nema obroka!</option>
                                <?php
                            }
                            ?>
            </select>
            </div>

    
        </div>

        </div>
        <form>
         
        </div>
      </div>
      <div class="container">
        <div class="btnAdd">
         <a href="#!" data-id="" data-bs-toggle="modal" data-bs-target="#addUserModal"   class="btn btn-success btn-sm dt-buttons" >Dodaj ručno obrok</a>
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
            <th>Vrsta bona</th>
            <th>Ime jela</th>
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
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table-locale-all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="select.js"></script>
<?php
$image = '../assets/images/logo.png';

// Read image path, convert to base64 encoding
$type = pathinfo($image, PATHINFO_EXTENSION);
$data = file_get_contents($image);

$imgData = base64_encode($data);
$src = 'data:image/' . $type . ';base64,'.$imgData;
?>
  <script type="text/javascript">

    $(document).ready(function() {

      datumsort();

      function datumsort(datum_od = '', datum_do = '', ime_radnika = '', obrok = '')
      {
      $('#example').DataTable({ 
        dom: 'Blfrtip',
        buttons: [
            {
                extend: 'print',
                text: 'Štampaj',
                className: 'btn btn-primary',
                exportOptions:{
                  columns: [1,2,3,4,5,6]
                }
            },
            {
              extend: 'excel',
              text: 'Izvezi u excel',
              className: 'btn btn-primary',
              exportOptions:{
                stripHtml: false,
                columns: [1,2,3,4,5,6]
                },
                
                
            },
            {
              extend: 'copy',
              text: 'Kopiraj',
              className: 'btn btn-primary',
                exportOptions:{
                  columns: [1,2,3,4,5,6]
                }
            },
            {
                extend: 'pdfHtml5',
                text: 'Izvezi u pdf',
                className: 'btn btn-primary',
                title: '',
                customize: function ( doc ) {
                    doc.content.splice( 0, 0, {
                        margin: [ 0, 0, 0, 12 ],
                        alignment: 'left',
                        image: '<?php echo $src; ?>'
                   } );
                }
            },



            ],
       
        
        
        "createdRow": function( row, data, dataIndex ) {
          $(row).attr('id', data[0]);
        },
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Sve"]],
        'serverSide': true,
        'processing':'true',
        'paging':'true',
        'order': [],
        'searching': 'false',
       
        "language": {
        "paginate": {
        "previous": "Predhodna",
        "next": "Sledeća"
        },
        "emptyTable":       "Nema podataka!",
        "info":             "Prikazano _END_ od ukupno _TOTAL_ podataka",
        "infoEmpty":        "Nema podataka!",
        "infoFiltered":     "(Broj rezultata pretrage : _MAX_ )",
        "search": "Pretraži :",
        "lengthMenu": "Prikaži _MENU_ podataka"
        },
       

        'ordering': true,
        "columnDefs": [{
          'targets':[7],
          'orderable' :false
        },
        
        { "name": "id",   "targets": 0 },
        { "name": "ime_prezime",  "targets": 1 },
        { "name": "broj_kartice", "targets": 2 },
        { "name": "datum", "targets": 3 },
        { "name": "vrsta_obroka",  "targets": 4 },
        { "name": "vrsta_bona",    "targets": 5 },
        { "name": "ime_jela",    "targets": 6 },

        ],
        
        
        'ajax': {
          'url':'fetch_data.php',
          'type':'post',
          'data':{
            datum_od:datum_od, datum_do:datum_do, ime_radnika:ime_radnika, obrok:obrok
          }
          
          

        },
        
       

      

      
      });

    }
    $('#filter').click(function(){
        var datum_od = $('#datum_od').val();
        var datum_do = $('#datum_do').val();
        var ime_radnika = $('#ime_radnika').val();
        var obrok = $('#obrok').val();
        if(datum_do != '' || datum_od != '' || ime_radnika != '' || obrok != ''){
           $('#example').DataTable().destroy();
           datumsort(datum_od, datum_do, ime_radnika, obrok);
        }
        else{
          alert('Unesite barem jedan kriterijum za pretragu!');
        }
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
      var vrsta_bona = $('#addTypeField').val();
      var ime_jela = $('#addObrokField').val();
      if(vrsta_obroka != '' && vrsta_bona != '' && ime_prezime != '' && datum != '' && broj_kartice != '' && ime_jela != '')
      {
       $.ajax({
         url:"add_user.php",
         type:"post",
         data:{vrsta_obroka:vrsta_obroka,ime_prezime:ime_prezime,datum:datum,broj_kartice:broj_kartice,vrsta_bona:vrsta_bona,ime_jela:ime_jela},
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
          else if (status=='false')
          {
            alert('failed');
          }
          else if (status=='already_recorded')
          {
            alert('Korisnik je već evidentiran u predhodnih 12h! Podaci nisu poslati!')
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
       var vrsta_bona = $('#typeField').val();
       var ime_jela = $('#obrokField').val();
       var id= $('#id').val();
       if(vrsta_obroka != '' && vrsta_bona != '' && ime_prezime != '' && datum != '' && broj_kartice != '' && ime_jela != '')
       {
         $.ajax({
           url:"update_user.php",
           type:"post",
           data:{vrsta_obroka:vrsta_obroka,ime_prezime:ime_prezime,datum:datum,broj_kartice:broj_kartice,id:id,vrsta_bona:vrsta_bona,ime_jela:ime_jela},
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
              row.row("[id='" + trid + "']").data([id,ime_prezime,broj_kartice,datum,vrsta_obroka,vrsta_bona,ime_jela,button]);
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
       $('#typeField').val(json.vrsta_bona);
       $('#obrokField').val(json.ime_jela);
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
            <label for="nameField"   class="col-md-3 form-label">Ime Prezime</label>
            <div class="col-md-9">
              <input type="text" onkeyup="GetDetail3(this.value)" class="form-control" id="nameField" name="name" >
            </div>
          </div>
          <div class="mb-3 row">
            <label for="cardField" class="col-md-3 form-label">Broj kartice</label>
            <div class="col-md-9">
              <input type="number"  onkeyup="GetDetail4(this.value)" class="form-control" id="cardField" name="email">
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
              <option value="hladni obrok" name="hladni obrok">Hladan obrok</option>
              <option value="topli obrok" name="topli obrok">Topli obrok</option>
           </select>
            </div>
          </div>
          
          <div class="mb-3 row">
            <label for="typeField" class="col-md-3 form-label">Vrsta bona</label>
            <div class="col-md-9">
            <select name="vrsta_bona" id="typeField">
              <option value="redovan" name="redovan">Redovan</option>
              <option value="gosti" name="gosti">Gosti</option>
              <option value="faktura" name="faktura">Fakturise se</option>
                </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="obrokField" class="col-md-3 form-label">Ime jela</label>
            <div class="col-md-9">
            <select class="form-control mb-3" name="ime_jela" id="obrokField">
                            
                                
                            <?php
                            require('connection.php');
                            $query = "SELECT * FROM obroci WHERE aktivan = true";
                            $query_run = mysqli_query($con, $query);
                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $row){
                                    ?>
                                    <option value="<?= $row['ime_obroka'];?>"><?= $row['ime_obroka'];?></option>
                                    <?php
                                }
                            }
                            else
                            {
                                ?>
                                <option value="">Nema obroka!</option>
                                <?php
                            }
                            ?>
             </select>
                        
            </div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Izmeni</button>
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
              <input type="text" class="form-control"  onkeyup="GetDetail(this.value)" id="addUserField" name="name" >
            </div>
          </div>
          <div class="mb-3 row">
            <label for="addCardField" class="col-md-3 form-label">Broj kartice</label>
            <div class="col-md-9">
              <input type="number" class="form-control"  onkeyup="GetDetail2(this.value)" id="addCardField" name="email">
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
              <option value="hladan obrok" name="hladni obrok">Hladan obrok</option>
              <option value="topli obrok" name="topli obrok">Topli obrok</option>
                </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="addTypeField" class="col-md-3 form-label">Vrsta bona</label>
            <div class="col-md-9">
            <select name="vrsta_bona" id="addTypeField">
              <option value="redovan" name="redovan">Redovan</option>
              <option value="gosti" name="gosti">Gosti</option>
              <option value="faktura" name="faktura">Fakturise se</option>
            </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="addObrokField" class="col-md-3 form-label">Ime jela</label>
            <div class="col-md-9">
            <select class="form-control mb-3 " name="ime_jela" id="addObrokField"  multiple="multiple">
                            
                                
                            <?php
                            require('connection.php');
                            $query = "SELECT * FROM obroci WHERE aktivan = true";
                            $query_run = mysqli_query($con, $query);
                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $row){
                                    ?>
                                    <option value="<?= $row['ime_obroka'];?>"><?= $row['ime_obroka'];?></option>
                                    <?php
                                }
                            }
                            else
                            {
                                ?>
                                <option value="">Nema obroka!</option>
                                <?php
                            }
                            ?>
             </select>
           
            </div>
          </div>
          <div class="text-center">
            <button type="submit"  class="btn btn-primary" onClick="window.location.reload();">Dodaj</button>
          </div>
        </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
      </div>
    </div>
  </div>
</div>
<script src="getdetail.js"></script>

</body>
</html>

